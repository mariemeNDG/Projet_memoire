<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use App\Models\Incubateur;
use App\Models\IncubateurCandidature;
use App\Models\Mentorat;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentoratController extends Controller
{
    public function index()
    {
        $demandes = Auth::user()->mentorats()->with(['mentor', 'projet'])->latest()->get();

        return view('entrepreneurs.mentorat.demande', compact('demandes'));
    }

    public function create()
    {
        $projets = Auth::user()->projets()->get();
        $mentors = User::role('mentor')->get();

        return view('entrepreneurs.mentorat.nouvelle-demande', compact('projets', 'mentors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'projet_id' => 'required|exists:projets,id',
            'mentor_id' => 'required|exists:users,id',
            'domaine_accompagnement' => 'required|array',
            'objectif_accompagnement' => 'required|string',
            'disponibilites' => 'required|string',
            'duree' => 'required|string',
            'conditions' => 'accepted'
        ]);

        // Vérifier que le projet appartient bien à l'utilisateur
        if (!Auth::user()->projets()->where('id', $request->projet_id)->exists()) {
            return back()->with('error', 'Projet non trouvé');
        }

        // Vérifier que le mentor a bien le rôle mentor
        if (!User::find($request->mentor_id)->hasRole('mentor')) {
            return back()->with('error', 'Utilisateur sélectionné n\'est pas un mentor');
        }

        $mentorat = Mentorat::create([
            'user_id' => Auth::id(),
            'mentor_id' => $request->mentor_id,
            'projet_id' => $request->projet_id,
            'domaine_accompagnement' => $request->domaine_accompagnement,
            'objectif_accompagnement' => $request->objectif_accompagnement,
            'disponibilites' => $request->disponibilites,
            'duree' => $request->duree,
            'statut' => 'En attente'
        ]);

        return redirect()->route('entrepreneur.mentorat.index')
            ->with('success', 'Demande de mentorat envoyée avec succès');
    }

    public function show(Mentorat $mentorat)
    {
        // Vérification que la demande appartient bien à l'utilisateur connecté
        if ($mentorat->user_id !== Auth::id()) {
            abort(403);
        }

        return view('entrepreneurs.mentorat.detail', [
            'mentorat' => $mentorat->load(['mentor', 'projet'])
        ]);
    }
    public function destroy(Mentorat $mentorat)
    {
        if ($mentorat->user_id !== Auth::id()) {
            abort(403);
        }

        $mentorat->delete();

        return back()->with('success', 'Demande annulée avec succès');
    }

    public function recherches(Request $request)
    {
        $query = Incubateur::query();

        // Recherche par nom ou description
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nom', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%");
            });
        }

        // Filtre par secteurs
        if ($request->has('secteurs')) {
            $query->where(function($q) use ($request) {
                foreach ($request->secteurs as $secteur) {
                    $q->orWhere('secteur', 'like', "%$secteur%");
                }
            });
        }

        // Filtre par localisation
        if ($request->has('localisation')) {
            $query->where('adresse', 'like', "%{$request->localisation}%");
        }

        $incubateurs = $query->orderBy('created_at', 'desc')->paginate(6);

        return view('entrepreneurs.incubateurs.recherche', compact('incubateurs'));
    }

    // ================ POSTULER À UN INCUBATEUR ================
        public function postuler(Incubateur $incubateur)
    {
        $projets = auth()->user()->projets()->where('etat', '!=', 'en conception')->get();
        return view('entrepreneurs.incubateurs.postuler', compact('incubateur', 'projets'));
    }

    public function storeCandidature(Request $request, Incubateur $incubateur)
    {
        $validated = $request->validate([
            'projet_id' => 'required|exists:projets,id',
            'motivation' => 'required|string|min:100',
            'business_plan' => 'required|file|mimes:pdf|max:2048',
            'equipe' => 'required|array',
            'equipe.*.nom' => 'required|string',
            'equipe.*.role' => 'required|string',
            'budget_previsionnel' => 'required|numeric',
            'duree_incubation' => 'required|string',
            'besoins_specifiques' => 'nullable|array'
        ]);

        // Vérifier que le projet appartient bien à l'utilisateur
        if (!auth()->user()->projets()->where('id', $request->projet_id)->exists()) {
            return back()->with('error', 'Projet non trouvé');
        }

        // Enregistrer le business plan
        $businessPlanPath = $request->file('business_plan')->store('incubateur/candidatures/business-plans');

        $candidature = IncubateurCandidature::create([
            'incubateur_id' => $incubateur->id,
            'projet_id' => $request->projet_id,
            'user_id' => auth()->id(),
            'motivation' => $request->motivation,
            'business_plan' => $businessPlanPath,
            'equipe' => json_encode($request->equipe),
            'budget_previsionnel' => $request->budget_previsionnel,
            'duree_incubation' => $request->duree_incubation,
            'besoins_specifiques' => json_encode($request->besoins_specifiques ?? []),
            'statut' => 'en_attente'
        ]);

        

        return redirect()->route('entrepreneur.incubateur.candidatures')
            ->with('success', 'Votre candidature a été soumise avec succès');
    }

    public function candidatures()
    {
        $candidatures = auth()->user()->incubateurCandidatures()
            ->with(['incubateur', 'projet'])
            ->latest()
            ->paginate(10);

        // Calcul des statistiques
        $stats = [
            'total' => $candidatures->total(),
            'acceptees' => auth()->user()->incubateurCandidatures()->where('statut', 'accepte')->count(),
            'en_attente' => auth()->user()->incubateurCandidatures()->where('statut', 'en_attente')->count(),
            'refusees' => auth()->user()->incubateurCandidatures()->where('statut', 'refuse')->count(),
        ];

        $stats['taux_acceptation'] = $stats['total'] > 0
            ? round(($stats['acceptees'] / $stats['total']) * 100)
            : 0;

        return view('entrepreneurs.incubateurs.candidature', compact('candidatures', 'stats'));
    }

}
