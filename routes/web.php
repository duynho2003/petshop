<?php
use App\Http\Controllers\FE\ProcessRegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\FE\AuthenticateController;
use App\Http\Controllers\FE\CartController;
use App\Http\Controllers\FE\RenderProductCategoryController;
use App\Http\Controllers\FE\ForgotPasswordController;
use App\Http\Controllers\BE\AdminLoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dog-list', [HomeController::class, 'doglist'])->name('doglist');

Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::get('/adoption', [HomeController::class, 'adoption'])->name('adoption');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/blogdetails1', [HomeController::class, 'blogdetails1'])->name('blogdetails1');

Route::get('/blogdetails2', [HomeController::class, 'blogdetails2'])->name('blogdetails2');

Route::get('/blogdetails3', [HomeController::class, 'blogdetails3'])->name('blogdetails3');

Route::get('/out-adoption/{id}', [HomeController::class, 'out_adoption'])->name('out-adoption');

Route::get('/product', [HomeController::class, 'product'])->name('product'); 
Route::get('/product/{slug}', [HomeController::class, 'productDetails'])
            ->name('productDetails');

            Route::post('/search', [HomeController::class, 'search'])->name('customer.search'); 


// adoption
Route::get('/adoption', [HomeController::class, 'adoption'])->name('adoption');

Route::get('/out-adoption/{email}', [HomeController::class, 'out_adoption'])->name('out-adoption');


// xu li phan loai render product view
Route::get('/category-dog-food', [RenderProductCategoryController::class, 'categorydogfood'])->name('dogfood');

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/edit-user/{id}', [HomeController::class, 'editUser'])->name('edit_user');
    Route::post('/process-edit-user/{id}', [HomeController::class, 'processEditUser'])->name('process_edit_user');
});
Route::get('/myOrders', [HomeController::class, 'myOrders'])->name('myOrders');

// Cart
Route::get('/view-cart', [CartController::class, 'cart'])->name('customer.cart'); 
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart'); 
Route::post('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');
Route::post('clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::post('/processCheckout', [CartController::class, 'processCheckout'])->name('processCheckout');

// y/c cần phải login
Route::group(['middleware'=>'islogin'], function() {
    Route::get('/admin', [AdminLoginController::class, 'index'])->name('admin');

    // xử lý cho role admin
    Route::group(['middleware'=>'isadmin', 'prefix'=>'admin', 'as'=>'admin.'], function() {
        Route::resource('/product', ProductController::class);
    });
});


