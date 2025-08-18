<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Mail\ContacterPorteurMail;
use App\Models\Accompagnement;
use App\Models\Mentorat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AccompagnementController extends Controller
{
    public function disponibilite()
    {
        // Récupérer les demandes de mentorat où l'utilisateur connecté est le mentor
        $demandes_mentors = Mentorat::where('mentor_id', Auth::id())
            ->where('statut', 'En attente')
            ->with(['user', 'projet', 'mentor'])
            ->latest()
            ->paginate(10);

        return view('Mentor.projet.disponibilite', compact('demandes_mentors'));
    }

    public function storeAccompagnement(Request $request)
    {
        $validated = $request->validate([
        'mentorat_id' => 'required|exists:mentorats,id',
        'messages' => 'required|string|max:1000',
        'disponibilites' => 'required|string|max:255',
        'domaine_accompagnement' => 'required|array|min:1',
    ]);

    // Créer l'accompagnement
    Accompagnement::create([
        'mentorat_id' => $validated['mentorat_id'],
        'user_id' => Auth::id(),
        'projet_id' => Mentorat::find($validated['mentorat_id'])->projet_id,
        'messages' => $validated['messages'],
        'disponibilites' => $validated['disponibilites'],
        'domaine_accompagnement' => json_encode($validated['domaine_accompagnement']),
    ]);

    // Mettre à jour le statut du financement
    $mentorat = Mentorat::find($request->mentorat_id);
    $mentorat->statut = 'Accepté';
    $mentorat->save();

    return redirect()->back()->with('success', 'Accompagnement créé et demande acceptée.');

    }

    public function accompagnement()
    {
        $projetsAccompagnes = Accompagnement::with(['mentorat.projet', 'mentorat.user'])
        ->whereHas('mentorat', function ($query) {
            $query->where('statut', 'Accepté');
        })
        ->get();

        return view('Mentor.projet.accompagnement', compact('projetsAccompagnes'));
    }

    public function envoyerMessage(Request $request)
    {
        $entrepreneur = User::findOrFail($request->user_id);
        $mentor = auth()->user();

        Mail::to($entrepreneur->email)->send(
            new ContacterPorteurMail(
                $mentor->name,
                $entrepreneur->name,
                $request->message
            )
        );

        return back()->with('success', 'Message envoyé avec succès.');

    }

}
