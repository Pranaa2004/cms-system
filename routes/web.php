<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layouts.backend.main');
});

Route::get('/dashboard', function () {
    return view('');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
