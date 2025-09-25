<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('layouts.backend.main');
// });

Route::get('/dashboard', function () {
    return view('index');
});
// ->middleware(['auth'])->name('dashboard');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

Route::get('/login', [AuthController::class, 'login_show'])->name('login_show');
Route::post('/post-login', [AuthController::class, 'login_store'])->name('login_store');
Route::get('/register', [AuthController::class, 'register'])->name('register_show');
Route::post('/post-register', [AuthController::class, 'storeregister'])->name('register_store');
Route::post('/logout', [AuthController::class, 'logout']);
