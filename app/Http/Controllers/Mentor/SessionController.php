<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'projet_id' => 'required|exists:projets,id',
            'date_session' => 'required|date',
            'duree' => 'required|integer|min:15',
            'type' => 'required|string',
            'description' => 'nullable|string',
        ]);



        Meeting::create($request->all());

        return back()->with('success', 'La réunion a été planifiée avec succès ✅');
    }


    public function calendrier()
    {
        // Récupérer toutes les sessions avec le projet associé
        $sessions = Meeting::with('projet')->orderBy('date_session', 'desc')->get();

        return view('Mentor.disponibilite.calendrier', compact('sessions'));
    }


}



