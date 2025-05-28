<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\HoraireController;



Route::get('/', function () {
    return view('clients.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour afficher les formulaires (accessibles sans authentification)
Route::get('/dashboard/demande', function() {
    return view("clients.demande");
})->name('demande');

Route::get('/dashboard/license', function() {
    $demande = null;
    if (auth()->check()) {
        $demande = \App\Models\Demande::where('user_id', auth()->id())
            ->latest()
            ->first();
    }
    return view("clients.license", compact('demande'));
})->name('license');

Route::get('/dashboard/suivi', function() {
    return view("clients.suivi");
})->name('suivi');

// Routes protégées qui nécessitent une authentification
Route::middleware('auth')->group(function () {
    // Routes du profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Routes pour les actions qui nécessitent une authentification
    Route::post('/demandes', [DemandeController::class, 'store'])->name('demandes.store');
    Route::patch('/demandes/{demande}/status', [DemandeController::class, 'updateStatus'])->name('demandes.update-status');
    Route::get('/demandes/{demande}', [DemandeController::class, 'show'])->name('demandes.show');
    Route::post('/suivi', [DemandeController::class, 'trackDemande'])->name('demandes.track');
    Route::get('/demandes/search', [DemandeController::class, 'search'])->name('demandes.search');
    Route::get('/license/download/{license}', [DemandeController::class, 'downloadLicense'])->name('license.download');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/lwhatthakom', [DemandeController::class, 'index'])->name('lwhatthakom');
    
    Route::get('admin/dashboard',[HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/products',[ProductController::class, 'index'])->name('admin.products');
    Route::get('admin/users',[UsersController::class, 'index'])->name('admin.users');
    Route::get('admin/income',[IncomeController::class, 'index'])->name('admin.income');
    Route::get('admin/settings',[SettingsController::class, 'index'])->name('admin.settings');

    // 🛠 Routes pour modifier et supprimer un utilisateur
    Route::get('admin/users/{id}/edit', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users.create_employee');
    Route::post('/admin/users', [UsersController::class, 'store'])->name('admin.users.store');

    Route::get('/admin/horaires', [HoraireController::class, 'index'])->name('admin.horaires.index');
    Route::post('/admin/horaires', [HoraireController::class, 'store'])->name('admin.horaires.store');
    Route::patch('/admin/horaires/{horaire}', [HoraireController::class, 'update'])->name('admin.horaires.update');
    Route::delete('/admin/horaires/{horaire}', [HoraireController::class, 'destroy'])->name('admin.horaires.destroy');

});

// Route API pour les horaires disponibles
Route::get('/api/horaires/available', [HoraireController::class, 'getAvailableHoraires']);

require __DIR__.'/auth.php';

//khaliw had les liens hna merci👀
//Route::get('admin/dashboard',[HomeController::class, 'index']);
//Route::get('admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin']);