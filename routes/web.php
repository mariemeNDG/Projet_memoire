<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Entrepreneur\FinancementController;
use App\Http\Controllers\Entrepreneur\MentoratController;
use App\Http\Controllers\Entrepreneur\ProjetController;
use App\Http\Controllers\Investisseur\InvestisseurController;
use App\Models\Financement;
use App\Models\Mentorat;

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
Route::prefix('admin/tableau-de-bord')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardAdmin'])->name('dashboard');

    // ========================= GESTION DES UTILISATEURS =========================
    Route::get('/utilisateurs', [AdminController::class, 'listUsers'])->name('utilisateurs');
    Route::delete('/utilisateurs/{id}', [AdminController::class, 'deleteUser'])->name('utilisateurs.delete');


    // Page principale
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

    // CRUD
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{role}', [RoleController::class, 'show'])->name('roles.show');
    Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');

    Route::get('/validations', [DashboardController::class, 'validationUser'])->name('validations');
    Route::get('/signalements', [DashboardController::class, 'signalement'])->name('signalements');
});

// ---------------------- ENTREPRENEUR ----------------------
Route::prefix('entrepreneur/tableau-de-bord')->name('entrepreneur.')->middleware(['auth', 'role:entrepreneur'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardENTPNR'])->name('dashboard');

    // CRUD PROJET
    Route::resource('projets',ProjetController::class)->names('projets');

    // Routes mentorat
    Route::get('/mentorat', [MentoratController::class, 'index'])->name('mentorat.index');
    Route::get('/mentorat/nouvelle', [MentoratController::class, 'create'])->name('mentorat.create');
    Route::post('/mentorat', [MentoratController::class, 'store'])->name('mentorat.store');
    Route::get('/mentorat/{mentorat}', [MentoratController::class, 'show'])->name('mentorat.show');
    Route::delete('/mentorat/{mentorat}', [MentoratController::class, 'destroy'])->name('mentorat.destroy');


    Route::get('/sessions', [DashboardController::class, 'sessions'])->name('mentorat.sessions');

    Route::get('/candidatures', [MentoratController::class, 'candidatures'])->name('incubateur.candidatures');
    Route::get('/recherches', [MentoratController::class, 'recherches'])->name('incubateur.recherches');

    Route::get('/postuler/{incubateur}', [MentoratController::class, 'postuler'])->name('incubateur.postuler');
    Route::post('/postuler/{incubateur}', [MentoratController::class, 'storeCandidature'])->name('incubateur.store-candidature');
    Route::get('/candidatures', [MentoratController::class, 'candidatures'])->name('incubateur.candidatures');
    Route::delete('/candidatures/{candidature}', [MentoratController::class, 'annulerCandidature'])->name('incubateur.annuler-candidature');

    Route::get('/financements', [FinancementController::class, 'index'])->name('financement.recherche');
    Route::post('/financements', [FinancementController::class, 'store'])->name('financement.store');
    Route::get('/propositions', [DashboardController::class, 'proposition'])->name('financement.propositions');
});

// ------------------------- MENTOR -------------------------
Route::prefix('mentor/tableau-de-bord')->name('mentor.')->middleware(['auth', 'role:mentor'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardMentor'])->name('dashboard');

    Route::get('/accompagnement', [DashboardController::class, 'accompagnement'])->name('accompagnement');
    Route::get('/disponibilites', [MentoratController::class, 'disponibilite'])->name('disponibilite');
    Route::get('/calendrier', [DashboardController::class, 'calendrier'])->name('calendrier');
    Route::get('/preferences', [DashboardController::class, 'preference'])->name('preferences');
    Route::get('/evaluations', [DashboardController::class, 'evaluation'])->name('evaluations');
});

// ---------------------- INVESTISSEUR ----------------------
Route::prefix('investisseur/tableau-de-bord')->name('investisseur.')->middleware(['auth', 'role:investisseur'])->group(function () {
    Route::get('/', [InvestisseurController::class, 'dashboardInvess'])->name('dashboard');

    Route::get('/decouverte', [InvestisseurController::class, 'decouverte'])->name('decouverte');
    Route::post('/investir', [InvestisseurController::class, 'investir'])
    ->name('investir');

    Route::get('/portfolio', [DashboardController::class, 'portfolio'])->name('portfolio');
    Route::get('/portfolio', [InvestisseurController::class, 'portfolio'])
    ->name('portfolio');

    Route::get('/investissement/{id}/details', [InvestisseurController::class, 'show'])
    ->name('details');

    Route::get('/alerte/preferences', [DashboardController::class, 'alerte'])->name('alerte.preferences');
    Route::get('/alertes', [DashboardController::class, 'liste'])->name('alertes');
    Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions');
});

// ------------------------ INCUBATEUR -----------------------
Route::prefix('incubateur/tableau-de-bord')->name('incubateur.')->middleware(['auth', 'role:incubateur'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboardIncub'])->name('dashboard');

    Route::get('/projets-incubes', [DashboardController::class, 'incubes'])->name('incubes');
    Route::get('/selection', [DashboardController::class, 'selection'])->name('selection');
    Route::get('/appel-lance', [DashboardController::class, 'lance'])->name('appel.lance');
    Route::get('/nouvel-appel', [DashboardController::class, 'newAppel'])->name('appel.nouveau');

    Route::get('/evenements', [DashboardController::class, 'listeIncub'])->name('evenements');
    Route::get('/creation-evenement', [DashboardController::class, 'creation'])->name('evenements.creation');
    Route::get('/equipe', [DashboardController::class, 'equipe'])->name('equipe');
});
