<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BE\DashboardController;
use App\Http\Controllers\BE\ProductController;
use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\FE\AuthenticateController;
use App\Http\Middleware\Authenticate;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dog-list', [HomeController::class, 'doglist'])->name('doglist');

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::get('/adoption', [HomeController::class, 'adoption'])->name('adoption');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/forgot', [AuthenticateController::class, 'forgot'])->name('forgot');

// Route::get('/product/{slug}', [HomeController::class, 'productDetails'])
//             ->name('productDetails');

Route::get('/login', [AuthenticateController::class, 'login'])->name('login');

// Route::post('/login', [DashboardController::class, 'processLogin'])
//         ->name('processLogin');

Route::get('/register', [AuthenticateController::class, 'register'])->name('register');

Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

// Route::post('/add-cart', [HomeController::class, 'addCart'])->name('addCart');

// Route::get('/view-cart', [HomeController::class, 'viewCart'])->name('viewCart');

// Route::get('/clear-cart', [HomeController::class, 'clearCart'])->name('clearCart');

// y/c cần phải login
Route::group(['middleware'=>'islogin'], function() {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');

    // xử lý cho role admin
    Route::group(['middleware'=>'isadmin', 'prefix'=>'admin', 'as'=>'admin.'], function() {
        Route::resource('/product', ProductController::class);
    });
});


