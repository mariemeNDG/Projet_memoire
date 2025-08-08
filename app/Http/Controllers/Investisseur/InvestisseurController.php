<?php

namespace App\Http\Controllers\Investisseur;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use App\Models\Financement;
use App\Models\Investissement;
use Illuminate\Http\Request;

class InvestisseurController extends Controller
{
    public function dashboardInvess()
    {
        $user = auth()->user();

        // Compteurs
        $stats = [
            'projets_finances' => Projet::whereHas('financements', function ($query) {
                $query->where('statut', 'en attente');
            })->count(),

            'projets_investis' => Investissement::where('user_id', $user->id)
                                ->where('statut', 'investi')
                                ->count(),

            'montant_investi' => Investissement::where('user_id', $user->id)
                                ->where('statut', 'investi')
                                ->sum('montant'),

            'projets_en_cours' => Projet::whereHas('financements', function ($query) {
                $query->where('statut', 'en cours');
            })->count(),
        ];

        // Données pour les graphiques
        // $sectorData = Investissement::where('user_id', $user->id)
        //                 ->join('financements', 'investissements.financement_id', '=', 'financements.id')
        //                 ->join('projets', 'financements.projet_id', '=', 'projets.id')
        //                 ->selectRaw('projets.secteur, SUM(investissements.montant) as total')
        //                 ->groupBy('projets.secteur')
        //                 ->pluck('total', 'secteur')
        //                 ->toArray();

        // $typeData = Investissement::where('user_id', $user->id)
        //             ->join('financements', 'investissements.financement_id', '=', 'financements.id')
        //             ->selectRaw('financements.type, SUM(investissements.montant) as total')
        //             ->groupBy('financements.type')
        //             ->pluck('total', 'type')
        //             ->toArray();

        return view('investisseur.dashboard_invess', compact('stats'));
    }

    public function decouverte()
    {
        $projets = Projet::whereHas('financements', function ($query) {
            $query->where('statut', 'en attente');
        })
            ->with(['user', 'financements' => function ($query) {
                $query->where('statut', 'en attente');
            }])
            ->latest()
            ->paginate(6);

        return view('investisseur.projet.decouverte', compact('projets'));
    }

    public function investir(Request $request)
    {
        $request->validate([
            'financement_id' => 'required|exists:financements,id',
            'montant' => 'required|numeric|min:1',
            'message' => 'required|string|max:500',
        ]);

        // Mettre à jour le statut du financement
        $financement = Financement::find($request->financement_id);
        $financement->statut = 'accepté';
        $financement->save();

        // Créer un nouvel investissement
        Investissement::create([
            'user_id' => auth()->id(),
            'financement_id' => $request->financement_id,
            'montant' => $request->montant,
            'message' => $request->message,
            'statut' => 'investi' // ou 'accepté' selon votre logique
        ]);

        return redirect()->route('investisseur.decouverte')
            ->with('success', 'Votre investissement a été enregistré avec succès!');
    }

    public function portfolio()
    {
        // Récupérer les investissements de l'utilisateur connecté avec statut accepté
        $investissements = Investissement::where('user_id', auth()->id())
            ->with(['financement.projet']) // Charge les relations
            ->whereHas('financement', function ($query) {
                $query->where('statut', 'accepté');
            })
            ->paginate(10);

        // Préparer les données pour les graphiques


        // Données pour le graphique par type de financement


        return view('investisseur.projet.portfolio', compact('investissements'));
    }
    public function show($id)
    {
        $investissement = Investissement::with(['financement.projet', 'user'])
            ->where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        return view('investisseur.modal.investissement_details', compact('investissement'));
    }
}
