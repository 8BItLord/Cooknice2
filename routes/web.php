<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

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

Route::get('/clickedprofile', function () {
    return view('clickedprofile');
});

Route::get('/halamanprofile', function () {
    return view('halamanprofile');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/gantiemail', function () {
    return view('gantiemail');
});

Route::get('/berandaSebelumLogin', function () {
    return view('berandaSebelumLogin');
});

Route::get('/berandaSetelahLogin', function () {
    return view('berandaSetelahLogin');
});

Route::get('/makanan', function () {
    return view('makanan');
});

Route::get('/minuman', function () {
    return view('minuman');
});

Route::get('/cemilan', function () {
    return view('cemilan');
});

Route::get('/koleksiAda', function () {
    return view('koleksiAda');
});

Route::get('/koleksiKosong', function () {
    return view('koleksiKosong');
});

Route::get('/uploadresep', [RecipeController::class, 'create'])->name('recipe.create');
Route::post('/resep', [RecipeController::class, 'store'])->name('recipe.store');
