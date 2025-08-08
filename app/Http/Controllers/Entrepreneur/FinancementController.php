<?php

namespace App\Http\Controllers\Entrepreneur;

use App\Http\Controllers\Controller;
use App\Models\Financement;
use App\Models\Projet;
use Illuminate\Http\Request;

class FinancementController extends Controller
{
    //// Afficher la liste des financements
    public function index()
    {
        $financements = Financement::with('projet')->latest()->get();
        $projets = Projet::all(); // pour le formulaire de création
        return view('entrepreneurs.financement.recherche', compact('financements', 'projets'));
    }

    // Enregistrer une nouvelle demande de financement
    public function store(Request $request)
    {
        $request->validate([
            'projet_id' => 'required|exists:projets,id',
            'type' => 'required|string',
            'montant' => 'required|numeric|min:0',
            'description' => 'required|string',
            'document' => 'nullable|file|mimes:pdf,xlsx,xls,doc,docx',
        ]);

        $documentPath = null;
        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')->store('documents/financements', 'public');
        }

        Financement::create([
            'projet_id' => $request->projet_id,
            'type' => $request->type,
            'montant' => $request->montant,
            'description' => $request->description,
            'document' => $documentPath,
            'statut' => 'en attente',
        ]);

        return redirect()->back()->with('success', 'Demande de financement publiée avec succès.');
    }
}
