<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/daftar', function () {
    return view('daftar');
});

// Tambahkan ini untuk halaman upload resep
Route::get('/upload-resep', [ResepController::class, 'create'])->name('resep.create');
Route::post('/upload-resep', [ResepController::class, 'store'])->name('resep.store');
