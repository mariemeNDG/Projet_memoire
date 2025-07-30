<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Affiche la liste des projets
     */
    public function index()
    {
        $projets = Auth::user()->projets()->latest()->get();

        // Statistiques
        $stats = [
            'total' => Auth::user()->projets()->count(),
            'labellises' => Auth::user()->projets()->where('etat', 'labellisé')->count(),
            'incubation' => Auth::user()->projets()->where('etat', 'en incubation')->count(),
            'financement' => Auth::user()->projets()->where('etat', 'en financement')->count()
        ];

        return view('entrepreneurs.projet.mes_projet', compact('projets', 'stats'));
    }

    /**
     * Affiche le formulaire de création
     */
    public function create()
    {
        return view('entrepreneurs.projet.new_projet');
    }

    /**
     * Enregistre un nouveau projet
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'secteur_activite' => 'required|string|max:255',
            'etat' => 'nullable|string|max:255',
            'budget' => 'required|numeric|min:0',
            'dure' => 'required|integer|min:1',
            'equipe' => 'required|integer|min:1',
            'document' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'accompagnement' => 'nullable|array'
        ]);

        // Gestion du fichier document
        if ($request->hasFile('document')) {
            $validated['document'] = $request->file('document')->store('projets/documents');
        }

         // Dans la méthode store()
        if ($request->has('accompagnement')) {
            $validated['accompagnement'] = implode(',', $request->accompagnement);
        }

        // Création du projet
        Auth::user()->projets()->create($validated);

        return redirect()->route('entrepreneur.projets.index')
            ->with('success', 'Projet créé avec succès');
    }

    /**
     * Affiche les détails d'un projet
     */
    public function show(Projet $projet)
    {

        return view('entrepreneurs.projet.detail', compact('projet'));
    }

    /**
     * Affiche le formulaire d'édition
     */
    public function edit(Projet $projet)
    {

        return view('entrepreneurs.projet.editer', compact('projet'));
    }

    /**
     * Met à jour un projet
     */
    public function update(Request $request, Projet $projet)
    {

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'etat' => 'required|in:en cours,en conception,en incubation,labellisé,en financement',
            'secteur_activite' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'dure' => 'required|integer|min:1',
            'equipe' => 'required|integer|min:1',
            'document' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'accompagnement' => 'nullable|array',
        ]);

        // Gestion du fichier document
        if ($request->hasFile('document')) {
            // Supprimer l'ancien fichier si existe
            if ($projet->document) {
                Storage::delete($projet->document);
            }
            $validated['document'] = $request->file('document')->store('projets/documents');
        }

        // Dans la méthode store()
        if ($request->has('accompagnement')) {
            $validated['accompagnement'] = implode(',', $request->accompagnement);
        }

        $projet->update($validated);

        return redirect()->route('entrepreneur.projets.index')
            ->with('success', 'Projet mis à jour avec succès');
    }

    /**
     * Supprime un projet
     */
    public function destroy(Projet $projet)
    {
        // Suppression du document associé
        if ($projet->document) {
            Storage::delete($projet->document);
        }

        $projet->delete();

        return redirect()->route('entrepreneur.projets.index')
            ->with('success', 'Projet supprimé avec succès');
    }
}
