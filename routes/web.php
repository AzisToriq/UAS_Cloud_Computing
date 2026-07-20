<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Models\Portfolio;
use App\Models\Service;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah rute web untuk aplikasi didaftarkan.
| Arsitektur rute dibagi menjadi: Publik (Landing Page) dan Privat (Admin).
|
*/

// ==========================================
// HALAMAN PUBLIK (Landing Page)
// ==========================================
Route::get('/', function () {
    // Mengambil 3 portofolio terbaru yang statusnya sudah 'published'
    $portfolios = Portfolio::where('is_published', true)->latest()->take(3)->get();

    // Mengambil semua data layanan dari database
    $services = Service::latest()->get();

    // Render ke halaman utama dengan membawa variabel compact
    return view('welcome', compact('portfolios', 'services'));
})->name('home');


// ==========================================
// HALAMAN ADMIN (Membutuhkan Autentikasi)
// ==========================================
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    // Dashboard Utama Admin
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // CRUD Resource untuk entitas utama
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('services', ServiceController::class);
});


// ==========================================
// PENGATURAN PROFIL (Bawaan Laravel Breeze)
// ==========================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Memuat rute autentikasi (login, register, reset password, dll)
require __DIR__.'/auth.php';
