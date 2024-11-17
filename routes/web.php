<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PemesanantController;
use App\Http\Controllers\UserManagementController;

Route::get('/admin-acc', function () {
    return view('admin.account');
});

Route::get('/riwayat', function () {
    return view('pages.riwayat-pembelian');
})->name('riwayat');

// Route::get('/', function () {
//     return view('pages.home');
// });
Route::get('/', [DestinasiController::class, 'showDestinations']);


Route::get('/dashboard', function () {
    if (auth()->user()->role !== 'admin') {
        return redirect('/');
    }
    return view('admin.dashboard-admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); // Define profile route here
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // Profile edit route
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Existing route for home
Route::get('/home', [DestinasiController::class, 'indexuser'])->middleware(['auth', 'verified'])->name('home');


// Routes for DestinasiController
Route::prefix('destinasi')->middleware('auth')->group(function () {
    // Hanya admin yang dapat mengakses route ini
    Route::get('/', function () {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirect jika bukan admin
        }
        return app(DestinasiController::class)->index();
    })->name('destinasi.index');  // List all destinasi

    Route::get('/create', function () {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirect jika bukan admin
        }
        return app(DestinasiController::class)->create();
    })->name('destinasi.create'); // Show create form

    Route::post('/', function () {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirect jika bukan admin
        }
        return app(DestinasiController::class)->store(request());
    })->name('destinasi.store');  // Store a new destinasi

    Route::get('/{id_destinasi}/edit', function ($id_destinasi) {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirect jika bukan admin
        }
        return app(DestinasiController::class)->edit($id_destinasi);
    })->name('destinasi.edit');  // Show edit form

    Route::put('/{id_destinasi}', function ($id_destinasi) {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirect jika bukan admin
        }
        return app(DestinasiController::class)->update($id_destinasi, request());
    })->name('destinasi.update'); // Update a destinasi

    Route::delete('/{id_destinasi}', function ($id_destinasi) {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirect jika bukan admin
        }
        return app(DestinasiController::class)->destroy($id_destinasi);
    })->name('destinasi.destroy'); // Delete a destinasi

    Route::get('/{id_destinasi}', function ($id_destinasi) {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');  // Redirect jika bukan admin
        }
        return app(DestinasiController::class)->show($id_destinasi);
    })->name('destinasi.show');  // Show a specific destinasi
});

// Percobaan Kategori
// Untuk kategori pura
Route::get('/kategori-pura', [DestinasiController::class, 'showDestinationsPura'])->name('kategori.pura');
Route::get('/kategori-pura/{id_destinasi}', [DestinasiController::class, 'showDetailPura'])->name('destinasi.showDetailPura');

// Untuk kategori pantai
Route::get('/kategori-pantai', [DestinasiController::class, 'showDestinationsPantai'])->name('kategori.pantai');
Route::get('/kategori-pantai/{id_destinasi}', [DestinasiController::class, 'showDetailPantai'])->name('destinasi.showDetailPantai');

// Untuk kategori artmarket
Route::get('/kategori-artmarket', [DestinasiController::class, 'showDestinationsArtmarket'])->name('kategori.artmarket');
Route::get('/kategori-artmarket/{id_destinasi}', [DestinasiController::class, 'showDetailArtmarket'])->name('destinasi.showDetailArtmarket');

// Untuk kategori alam
Route::get('/kategori-alam', [DestinasiController::class, 'showDestinationsAlam'])->name('kategori.alam');
Route::get('/kategori-alam/{id_destinasi}', [DestinasiController::class, 'showDetailAlam'])->name('destinasi.showDetailAlam');

// Untuk kategori snorkeling
Route::get('/kategori-snorkeling', [DestinasiController::class, 'showDestinationsSnorkeling'])->name('kategori.snorkeling');
Route::get('/kategori-snorkeling/{id_destinasi}', [DestinasiController::class, 'showDetailSnorkeling'])->name('destinasi.showDetailSnorkeling');


// End percobaan


require __DIR__.'/auth.php';

// Route::get('/kategori-pura', function () {
//     return view('pages.kategori-destination');
// });

Route::get('/payment', function () {
    return view('pages.payment');
});

Route::get('/payment-success', function () {
    return view('pages.payment-success');
});

Route::get('/detail', function () {
    return view('pages.detail');
});

// Route::get('/kategori-pura', [DestinasiController::class, 'showDestinations']);
// Route::get('/kategori-pura/{id_destinasi}', [DestinasiController::class, 'showDetail'])->name('destinasi.showDetail');

Route::post('/profile', [ProfileController::class, 'update'])->name('account.update');

// profil user


// Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
// Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


// Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/akun', [ProfileController::class, 'indexadmin'])->name('admin.account'); // Define profile route here
    Route::get('/akun/edit', [ProfileController::class, 'editadmin'])->name('admin.edit'); // Profile edit route
    Route::post('/akun', [ProfileController::class, 'updateadmin'])->name('admin.update');
    Route::delete('/akun', [ProfileController::class, 'destroyadmin'])->name('admin.destroy');
});
