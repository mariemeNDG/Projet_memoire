<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

// Accueil et auth
Route::get('/', fn () => view('welcome'));
require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route de redirection commune
    Route::get('/tableau-de-bord', [DashboardController::class, 'Maindashboard'])->name('dashboard.main');
});

// ------------------------- ADMIN -------------------------
Route::prefix('tableau-de-bord/admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardAdmin'])->name('dashboard');
    Route::get('/utilisateurs', [DashboardController::class, 'listUsers'])->name('utilisateurs');
    Route::get('/roles', [DashboardController::class, 'role'])->name('roles');
    Route::get('/validations', [DashboardController::class, 'validationUser'])->name('validations');
    Route::get('/signalements', [DashboardController::class, 'signalement'])->name('signalements');
});

// ---------------------- ENTREPRENEUR ----------------------
Route::prefix('tableau-de-bord/entrepreneur')->name('entrepreneur.')->middleware(['auth', 'role:entrepreneur'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardENTPNR'])->name('dashboard');

    Route::get('/mes-projets', [DashboardController::class, 'mesProjets'])->name('projets.index');
    Route::get('/nouveau-projet', [DashboardController::class, 'newProjets'])->name('projets.create');
    Route::get('/editer-projet', [DashboardController::class, 'editProjets'])->name('projets.edit');
    Route::get('/detail-projet', [DashboardController::class, 'projetDetails'])->name('projets.detail');

    Route::get('/demandes', [DashboardController::class, 'demandes'])->name('mentorat.demandes');
    Route::get('/nouvelle-demande', [DashboardController::class, 'newDemandes'])->name('mentorat.nouvelle');
    Route::get('/sessions', [DashboardController::class, 'sessions'])->name('mentorat.sessions');

    Route::get('/candidatures', [DashboardController::class, 'candidatures'])->name('incubateur.candidatures');
    Route::get('/recherches', [DashboardController::class, 'recherches'])->name('incubateur.recherches');

    Route::get('/financements', [DashboardController::class, 'financements'])->name('financement.recherche');
    Route::get('/propositions', [DashboardController::class, 'proposition'])->name('financement.propositions');
});

// ------------------------- MENTOR -------------------------
Route::prefix('tableau-de-bord/mentor')->name('mentor.')->middleware(['auth', 'role:mentor'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardMentor'])->name('dashboard');

    Route::get('/accompagnement', [DashboardController::class, 'accompagnement'])->name('accompagnement');
    Route::get('/disponibilites', [DashboardController::class, 'disponibilite'])->name('disponibilite');
    Route::get('/calendrier', [DashboardController::class, 'calendrier'])->name('calendrier');
    Route::get('/preferences', [DashboardController::class, 'preference'])->name('preferences');
    Route::get('/evaluations', [DashboardController::class, 'evaluation'])->name('evaluations');
});

// ---------------------- INVESTISSEUR ----------------------
Route::prefix('tableau-de-bord/investisseur')->name('investisseur.')->middleware(['auth', 'role:investisseur'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardInvess'])->name('dashboard');

    Route::get('/decouverte', [DashboardController::class, 'decouverte'])->name('decouverte');
    Route::get('/portfolio', [DashboardController::class, 'portfolio'])->name('portfolio');
    Route::get('/alerte/preferences', [DashboardController::class, 'alerte'])->name('alerte.preferences');
    Route::get('/alertes', [DashboardController::class, 'liste'])->name('alertes');
    Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions');
});

// ------------------------ INCUBATEUR -----------------------
Route::prefix('tableau-de-bord/incubateur')->name('incubateur.')->middleware(['auth', 'role:incubateur'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardIncub'])->name('dashboard');

    Route::get('/projets-incubes', [DashboardController::class, 'incubes'])->name('incubes');
    Route::get('/selection', [DashboardController::class, 'selection'])->name('selection');
    Route::get('/appel-lance', [DashboardController::class, 'lance'])->name('appel.lance');
    Route::get('/nouvel-appel', [DashboardController::class, 'newAppel'])->name('appel.nouveau');

    Route::get('/evenements', [DashboardController::class, 'listeIncub'])->name('evenements');
    Route::get('/creation-evenement', [DashboardController::class, 'creation'])->name('evenements.creation');
    Route::get('/equipe', [DashboardController::class, 'equipe'])->name('equipe');
});
