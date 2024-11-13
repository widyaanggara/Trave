<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PemesanantController;
use App\Http\Controllers\UserManagementController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Routes for DestinasiController
Route::prefix('destinasi')->group(function () {
    Route::get('/', [DestinasiController::class, 'index'])->name('destinasi.index');  // List all destinasi
    Route::get('/create', [DestinasiController::class, 'create'])->name('destinasi.create'); // Show create form
    Route::post('/', [DestinasiController::class, 'store'])->name('destinasi.store');  // Store a new destinasi
    Route::get('/{id_destinasi}/edit', [DestinasiController::class, 'edit'])->name('destinasi.edit');  // Show edit form
    Route::put('/{id_destinasi}', [DestinasiController::class, 'update'])->name('destinasi.update');  // Update a destinasi
    Route::delete('/{id_destinasi}', [DestinasiController::class, 'destroy'])->name('destinasi.destroy');  // Delete a destinasi
    Route::get('/{id_destinasi}', [DestinasiController::class, 'show'])->name('destinasi.show');  // Show a specific destinasi
});


Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/pura', function () {
    return view('pages.kategori-destination');
});

Route::get('/payment', function () {
    return view('pages.payment');
});

Route::get('/payment-success', function () {
    return view('pages.payment-success');
});


Route::get('/detail', function () {
    return view('pages.detail');
});

Route::get('/profile', function () {
    return view('pages.account');
});