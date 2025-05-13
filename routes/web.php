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
