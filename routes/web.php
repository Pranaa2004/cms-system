<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


// Route::get('/', function () {
//     return view('layouts.backend.main');
// });

Route::get('/login', [AuthController::class, 'login_show'])->name('login_show');
Route::post('/login', [AuthController::class, 'login_store'])->name('login_store');

Route::get('/register', [AuthController::class, 'register_show'])->name('register_show');
Route::post('/register', [AuthController::class, 'register_store'])->name('register_store');

Route::get('/dashboard', [AuthController::class, 'dashboard_show'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/', 'pages.frontend.home');

Route::resources([
    '/menus' => MenuController::class,
    '/posts' => PostController::class,
    '/pages' => PageController::class,
    '/tags' => TagController::class,
    '/category' => CategoryController::class

]);

// --------------------------- Forget Password ------------------------------//

Route::post('/forget-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// ---------------------------- Reset Password ----------------------------//
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('reset-password', 'reset')->name('password.update');
});
