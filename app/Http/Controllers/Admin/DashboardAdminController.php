<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentorat;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
     public function dashboard()
    {
        $conteurs = [
            'users' => User::count(),
            'projets' => Projet::count(),
            'projets_finances' => Projet::where('etat', 'en financement')->count(),
            'mentorat' => Mentorat::count(),
            'projets_incubation' => Projet::where('etat', 'en incubation')->count(),
        ];

        // Récupérer les 3 projets les plus récents
        $projets = Projet::orderBy('created_at', 'desc')->take(3)->get();

        // Compter les projets par état
    $projetsParEtat = Projet::select('etat', \DB::raw('count(*) as total'))
        ->groupBy('etat')
        ->pluck('total', 'etat');

        return view('admin.dashboardAdmin', compact('conteurs', 'projets', 'projetsParEtat'));
    }

 public function projets()
    {
         $projets = Projet::orderBy('created_at', 'desc')->get();
        return view('admin.projet.validation', compact('projets'));
    }

}
