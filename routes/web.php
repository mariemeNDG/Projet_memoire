<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Routes Entrepreneur

Route::get("/tableau-de-bord", [DashboardController::class, 'Maindashboard'])->name('main-dashboard');
Route::get("/entrepreneurs", [DashboardController::class, 'listeEntrepreneurs'])->name('liste-entrepreneurs');
Route::get("/TBENTRPNR", [DashboardController::class, 'dashboardENTPNR'])->name('dashboard-entrepreneur');
Route::get("/mes_projet_ENTRPNR", [DashboardController::class, 'mesProjets'])->name('mesProjets-entrepreneur');
Route::get("/nouveau_projet_ENTRPNR", [DashboardController::class, 'newProjets'])->name('newProjets-entrepreneur');
Route::get("/editer_projet_ENTRPNR", [DashboardController::class, 'editProjets'])->name('editProjets-entrepreneur');
Route::get("/detail_projet_ENTRPNR", [DashboardController::class, 'projetDetails'])->name('projetDetails-entrepreneur');
Route::get("/demande_mentorat_ENTRPNR", [DashboardController::class, 'demandes'])->name('demandes-entrepreneur');
Route::get("/nouvelle_demande_mentorat_ENTRPNR", [DashboardController::class, 'newDemandes'])->name('newDemandes-entrepreneur');
Route::get("/sessions_mentorat_ENTRPNR", [DashboardController::class, 'sessions'])->name('session-entrepreneur');
Route::get("/sessions_mentorat_ENTRPNR", [DashboardController::class, 'sessions'])->name('session-entrepreneur');
Route::get("/candidatures_incubateurs_ENTRPNR", [DashboardController::class, 'candidatures'])->name('candidatures-entrepreneur');
Route::get("/recherches_incubateurs_ENTRPNR", [DashboardController::class, 'recherches'])->name('recherches-entrepreneur');
Route::get("/recherches_incubateurs_ENTRPNR", [DashboardController::class, 'recherches'])->name('recherches-entrepreneur');
Route::get("/financements_ENTRPNR", [DashboardController::class, 'financements'])->name('financements-entrepreneur');
Route::get("/propositions_ENTRPNR", [DashboardController::class, 'proposition'])->name('propositions-entrepreneur');

// Routes mentors

Route::get("/dashboard_mentor", [DashboardController::class, 'dashboardMentor'])->name('dashboard-mentor');
Route::get("/dashboard_mentor", [DashboardController::class, 'dashboardMentor'])->name('dashboard-mentor');
Route::get("/accompagnement_mentor", [DashboardController::class, 'accompagnement'])->name('accompagnement-mentor');
Route::get("/projets_disponibles_mentor", [DashboardController::class, 'disponibilite'])->name('projets-disponibles-mentor');
Route::get("/calendrier_disponibles_mentor", [DashboardController::class, 'calendrier'])->name('calendrier-disponibles-mentor');
Route::get("/preference_disponibles_mentor", [DashboardController::class, 'preference'])->name('preference-disponibles-mentor');
Route::get("/donnee_evaluation_mentor", [DashboardController::class, 'evaluation'])->name('donnee_evaluation_mentor');

// Routes investisseurs

Route::get("/dashboard_invess", [DashboardController::class, 'dashboardInvess'])->name('dashboard_invess');
Route::get("/decouverte", [DashboardController::class, 'decouverte'])->name('decouverte');
Route::get("/portfolio", [DashboardController::class, 'portfolio'])->name('portfolio');
Route::get("/alerte", [DashboardController::class, 'alerte'])->name('alerte_preference');
Route::get("/liste", [DashboardController::class, 'liste'])->name('liste-alerte');
Route::get("/transactions", [DashboardController::class, 'transactions'])->name('transactions');

// Routes incubateurs

Route::get("/dashboard_incub", [DashboardController::class, 'dashboardIncub'])->name('dashboard_incub');
Route::get("/incubes", [DashboardController::class, 'incubes'])->name('incubes');
Route::get("/selection", [DashboardController::class, 'selection'])->name('selection');
Route::get("/lance", [DashboardController::class, 'lance'])->name('lance');
Route::get("/nouveau_projet", [DashboardController::class, 'newAppel'])->name('nouveau_projet');
Route::get("/liste_incubateurs", [DashboardController::class, 'listeIncub'])->name('liste_incubateurs');
Route::get("/liste_incubateurs", [DashboardController::class, 'listeIncub'])->name('liste_incubateurs');
Route::get("/creation", [DashboardController::class, 'creation'])->name('creation_incubateurs');
Route::get("/equipe", [DashboardController::class, 'equipe'])->name('equipe_incubateurs');

// Routes admin

Route::get("/dashboard_admin", [DashboardController::class, 'dashboardAdmin'])->name('dashboard_admin');
Route::get("/liste_utilisateurs", [DashboardController::class, 'listUsers'])->name('list_users');
Route::get("/roles_utilisateurs", [DashboardController::class, 'role'])->name('roles_utilisateurs');
Route::get("/validation_utilisateurs", [DashboardController::class, 'validationUser'])->name('validation_utilisateurs');
Route::get("/signalement_utilisateurs", [DashboardController::class, 'signalement'])->name('signalement_utilisateurs');
