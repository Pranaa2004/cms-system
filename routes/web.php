<?php

use App\Http\Controllers\backend\Auth\ForgotPasswordController;
use App\Http\Controllers\backend\Auth\ResetPasswordController;
use App\Http\Controllers\backend\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\MediaController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TagController;
use App\Http\Controllers\frontend\BlogContrlloer;
use App\Http\Controllers\frontend\BlogDetailsController;

Route::resources([
    '/menus' => MenuController::class,
    '/posts' => PostController::class,
    '/pages' => PageController::class,
    '/tags' => TagController::class,
    '/category' => CategoryController::class,
    '/medias' => MediaController::class

]);

// ---------------------- login --------------------------------------------

Route::get('/login', [AuthController::class, 'login_show'])->name('login_show');
Route::post('/login', [AuthController::class, 'login_store'])->name('login_store');

//--------------------- Register ---------------------------------------------

Route::get('/register', [AuthController::class, 'register_show'])->name('register_show');
Route::post('/register', [AuthController::class, 'register_store'])->name('register_store');

Route::get('/dashboard', [AuthController::class, 'dashboard_show'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// --------------------------- Forget Password ------------------------------//

Route::post('/forget-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// ---------------------------- Reset Password ----------------------------//
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('reset-password/{token}', 'getPassword')->name('password.reset');
    Route::post('reset-password', 'reset')->name('password.update');
});


//------------------ Frontend ------------------------------

// ----- Dynamic ------
Route::get('/',[BlogContrlloer::class,'show_blog_home'])->name('home');
Route::get('/blog',[BlogContrlloer::class,'show_blog'])->name('blog');
Route::get('/blog-details',[BlogDetailsController::class,'showBlogDetails'])->name('blog-details');

// ---- Static -------
Route::view('/about','pages.frontend.about')->name('about');
Route::view('/404','errors.404')->name('error');
Route::view('/contact-us','pages.frontend.contact')->name('contact-us');




