<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController; // <-- INI WAJIB DI-IMPORT
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

// HALAMAN LANDING PAGE (Publik)
Route::get('/', function () {
    // 1. Ambil 3 portofolio terbaru yang dipublish
    $portfolios = Portfolio::where('is_published', true)->latest()->take(3)->get();

    // 2. Ambil semua layanan jasa
    $services = Service::latest()->get();

    // 3. Lempar kedua data ke view welcome
    return view('welcome', compact('portfolios', 'services'));
});

// HALAMAN ADMIN (Wajib Login)
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('services', ServiceController::class); // <-- INI SUDAH DIAKTIFKAN
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
