<?php
use App\Http\Controllers\FE\ProcessRegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BE\ProductController;
use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\FE\AuthenticateController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\FE\ForgotPasswordController;
use App\Http\Controllers\BE\AdminLoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dog-list', [HomeController::class, 'doglist'])->name('doglist');

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::get('/adoption', [HomeController::class, 'adoption'])->name('adoption');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


// Route::get('/product/{slug}', [HomeController::class, 'productDetails'])
//             ->name('productDetails');



// Route::post('/login', [DashboardController::class, 'processLogin'])
//         ->name('processLogin');


//xu li dang ki 
Route::get('/register', [AuthenticateController::class, 'register'])->name('register');
Route::post('/register', [AuthenticateController::class, 'processRegister'])->name('processRegister');

// Xử lí verifies email
Route::get('/verify-account/{token}', [AuthenticateController::class, 'verifyAccount'])->name('verifyAccount');

//dang nhap 
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');

Route::POST('/login', [AuthenticateController::class, 'processLogin'])->name('processLogin');

//dang xuat
Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

//quen mat khau 
Route::get('/forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot');
Route::POST('/forgot-password', [ForgotPasswordController::class, 'processForgotPassword'])->name('processForgotPassword');

Route::get('/reset-password', [ForgotPasswordController::class, 'reset'])->name('reset');
Route::get('/reset-password/{token}/{email}', [ForgotPasswordController::class, 'resetPassword'])->name('resetPassword');

Route::post('/reset-password', [ForgotPasswordController::class, 'processResetPassword'])->name('processResetPassword');
// Route::post('/add-cart', [HomeController::class, 'addCart'])->name('addCart');

// Route::get('/view-cart', [HomeController::class, 'viewCart'])->name('viewCart');

// Route::get('/clear-cart', [HomeController::class, 'clearCart'])->name('clearCart');

// y/c cần phải login
Route::group(['middleware'=>'islogin'], function() {
    Route::get('/admin', [AdminLoginController::class, 'index'])->name('admin');

    // xử lý cho role admin
    Route::group(['middleware'=>'isadmin', 'prefix'=>'admin', 'as'=>'admin.'], function() {
        Route::resource('/product', ProductController::class);
    });
});


