<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('layouts.backend.main');
// });

Route::get('/login', [AuthController::class, 'login_show'])->name('login_show');
Route::post('/login', [AuthController::class, 'login_store'])->name('login_store');

Route::get('/register', [AuthController::class, 'register_show'])->name('register_show');
Route::post('/register', [AuthController::class, 'register_store'])->name('register_store');

Route::get('/dashboard', [AuthController::class, 'dashboard_show'])->name('dashboard')->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
