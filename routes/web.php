<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;



// Route::get('/', function () {
//     return view('layouts.backend.main');
// });

Route::get('/login', [AuthController::class, 'login_show'])->name('login_show');
Route::post('/login', [AuthController::class, 'login_store'])->name('login_store');

Route::get('/register', [AuthController::class, 'register_show'])->name('register_show');
Route::post('/register', [AuthController::class, 'register_store'])->name('register_store');

Route::get('/dashboard', [AuthController::class, 'dashboard_show'])->name('dashboard')->middleware('auth');
// Route::view('/dashboard', 'index');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgotpw', [AuthController::class, 'forgotpw'])->name('forgotpw');

Route::view('/', 'pages.frontend.home');

// Route::post('/', function () {
//     return view('pages.frontend.home');
// })->name('/home');

Route::resources([
    '/menus' => MenuController::class,
    '/posts' => PostController::class,
    '/pages' => PageController::class,
    '/tags' => TagController::class,
    '/category' => CategoryController::class

]);
