<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin,petugas'])->group(function () {
        Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
        Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
        Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
        Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
        Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    });

    Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])
        ->name('pelanggan.destroy')
        ->middleware('role:admin');
});