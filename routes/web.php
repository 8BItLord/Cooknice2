<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan ini untuk halaman upload resep
Route::get('/upload-resep', [ResepController::class, 'create'])->name('resep.create');
Route::post('/upload-resep', [ResepController::class, 'store'])->name('resep.store');
