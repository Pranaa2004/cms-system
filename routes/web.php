<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MediaController;
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

Route::get('/dashboard', [AuthController::class, 'dashboard_show'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resources([
    '/menus' => MenuController::class,
    '/posts' => PostController::class,
    '/pages' => PageController::class,
    '/tags' => TagController::class,
    '/category' => CategoryController::class,
    '/medias' => MediaController::class

]);

// --------------------------- Forget Password ------------------------------//

Route::post('/forget-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// ---------------------------- Reset Password ----------------------------//
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'getPassword')->name('password.reset');
    Route::post('reset-password', 'reset')->name('password.update');
});


//-------------- Frontend ------------------------------
Route::view('/', 'pages.frontend.home')->name('home');
Route::view('/about','pages.frontend.about')->name('about');
Route::view('/teacher','pages.frontend.teacher')->name('teacher');
Route::view('/teacher-details','pages.frontend.teacher-details')->name('teacher-details');
Route::view('/events','pages.frontend.events')->name('events');
Route::view('event-details','pages.frontend.event-details')->name('event-details');
Route::view('404','pages.frontend.error')->name('error');
Route::view('/gallery','pages.frontend.gallery')->name('gallery');
Route::view('contact-us','pages.frontend.contact')->name('contact-us');
Route::view('price','pages.frontend.price')->name('price');










