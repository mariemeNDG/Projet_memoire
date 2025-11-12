<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Accompagnement;
use App\Models\Meeting;
use App\Models\Mentorat;
use App\Models\Projet;
use Illuminate\Http\Request;

class DashboardMentorController extends Controller
{
    public function dashboard()
    {
        $compteurs = [
            'total_heures' => Meeting::sum('duree'),
            'total_sessions' => Meeting::count(),
            'total_demandes' => Mentorat::where('statut', 'En attente')->count(),
            'total_accompagnements' => Accompagnement::count(),
        ];

        $sessions = Meeting::with('projet')->orderBy('date_session', 'desc')->take(5)->get();

        $projetsdemandes = Mentorat::where('statut', 'En attente')->with('projet', 'user')->orderBy('created_at', 'desc')->take(5)->get();

        return view('Mentor.dashbord_mentor', compact('compteurs', 'sessions', 'projetsdemandes'));
    }
}
