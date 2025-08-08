<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function listeEntrepreneurs()
    {
        return view('entrepreneurs.liste');
    }

    public function dashboardENTPNR()
    {
        return view('entrepreneurs.dashboardENTPNR');
    }

    public function mesProjets()
    {
        return view('entrepreneurs.projet.mes_projet');
    }


    public function newProjets()
    {
        return view('entrepreneurs.projet.new_projet');
    }

    public function editProjets()
    {
        return view('entrepreneurs.projet.editer');
    }

    public function projetDetails()
    {
        return view('entrepreneurs.projet.detail');
    }

    public function demandes()
    {
        return view('entrepreneurs.mentorat.demande');
    }

    public function newDemandes()
    {
        return view('entrepreneurs.mentorat.nouvelle-demande');
    }

    public function sessions()
    {
        return view('entrepreneurs.mentorat.sessions');
    }

    public function candidatures()
    {
        return view('entrepreneurs.incubateurs.candidature');
    }



    public function financements()
    {
        return view('entrepreneurs.financement.recherche');
    }

    public function proposition()
    {
        return view('entrepreneurs.financement.proposition');
    }

    public function dashboardMentor()
    {
        return view('Mentor.dashbord_mentor');
    }

    public function accompagnement()
    {
        return view('Mentor.projet.accompagnement');
    }


    

    public function calendrier()
    {
        return view('Mentor.disponibilite.calendrier');
    }


    public function preference()
    {
        return view('Mentor.disponibilite.preferences');
    }

    public function evaluation()
    {
        return view('Mentor.evaluation.donnee');
    }

    public function alerte()
    {
        return view('investisseur.alerte.preference');
    }

    public function liste()
    {
        return view('investisseur.alerte.liste');
    }

    public function transactions()
    {
        return view('investisseur.transaction.historique');
    }

    public function dashboardIncub()
    {
        return view('incubateur.dashboard_incub');
    }

    public function incubes()
    {
        return view('incubateur.projet.incubes');
    }

    public function selection()
    {
        return view('incubateur.projet.selection');
    }

    public function lance()
    {
        return view('incubateur.appels.lance');
    }

    public function newAppel()
    {
        return view('incubateur.appels.new_projet');
    }

    public function listeIncub()
    {
        return view('incubateur.evenement.listeIncub');
    }

    public function creation()
    {
        return view('incubateur.evenement.creation');
    }

    public function equipe()
    {
        return view('incubateur.equipe.gestion');
    }

    // Parti admin

    public function dashboardAdmin()
    {
        return view('admin.dashboardAdmin');
    }



    public function role()
    {
        return view('admin.utilisateur.role');
    }

    public function validationUser()
    {
        return view('admin.projet.validation');
    }

    public function signalement()
    {
        return view('admin.signalement.signalementUser');
    }

    public function Maindashboard()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        }

        if ($user->hasRole('entrepreneur')) {
            return redirect()->route('entrepreneur.dashboard');
        }

        if ($user->hasRole('mentor')) {
            return redirect()->route('mentor.dashboard');
        }

        if ($user->hasRole('investisseur')) {
            return redirect()->route('investisseur.dashboard');
        }

        if ($user->hasRole('incubateur')) {
            return redirect()->route('incubateur.dashboard');
        }

        abort(403);
    }
}
