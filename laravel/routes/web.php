<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\DataDiri;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Beranda::class, 'index'])->name('beranda');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.submit');

    Route::middleware(['auth', 'isAdmin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('logout');
    });
});
Route::get('/datadiri', [DataDiri::class, 'index'])->name('datadiri');
Route::resource('aktivitas', AktivitasController::class);
Route::get('/kontak', [Kontak::class, 'index'])->name('kontak');
