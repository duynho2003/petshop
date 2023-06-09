<?php

use App\Http\Controllers\BE\AdminCategoryController;
use App\Http\Controllers\BE\AdminInforController;
use App\Http\Controllers\BE\AdminLoginController;
use App\Http\Controllers\BE\AdminMenuController;
use App\Http\Controllers\BE\AdminOrderController;
use App\Http\Controllers\BE\AdminProductController;
use App\Http\Controllers\BE\AdminSettingController;
use App\Http\Controllers\BE\AdminSliderController;
use App\Http\Controllers\BE\AdminSpecificateController;
use App\Http\Controllers\BE\AdminTypeController;
use App\Http\Controllers\BE\AdminUserController;
use App\Http\Controllers\BE\DashboardController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function() {
//     return redirect()->route('admin.login');
// });

// Xử lí login
Route::get('/', [AdminLoginController::class, 'admins'])->name('admin.admins');
Route::get('login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('login', [AdminLoginController::class, 'processLogin'])->name('admin.processLogin');

// Xử lí logout
Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Xử lí status success
Route::get('order/{order_id}/check-mail', [AdminOrderController::class, 'checkStatusMail'])->name('order.checkStatusMail');




Route::middleware('admin.auth')->group(function() {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    // Setting Infor and change password
    Route::get('setting-info', [AdminInforController::class, 'getSetting'])->name('admin.getSetting');
    Route::post('setting-info', [AdminInforController::class, 'postSetting'])->name('admin.postSetting');

    // Slider
    Route::resource('slider', AdminSliderController::class)->except(['destroy']);
    Route::get('slider/{slider}/delete', [AdminSliderController::class, 'destroy'])->name('slider.destroy');

    // Setting
    Route::resource('setting', AdminSettingController::class)->except(['destroy']);
    Route::get('setting/{setting}/delete', [AdminSettingController::class, 'destroy'])->name('setting.destroy');

    // Menu
    Route::resource('menu', AdminMenuController::class)->except(['destroy']);
    Route::get('menu/{menu}/delete', [AdminMenuController::class, 'destroy'])->name('menu.destroy');

     // Category
     Route::resource('category', AdminCategoryController::class)->except(['destroy']);
     Route::get('category/{category}/delete', [AdminCategoryController::class, 'destroy'])->name('category.destroy');

    // Product
    Route::resource('product', AdminProductController::class)->except(['destroy']);
    Route::get('product/{product}/delete', [AdminProductController::class, 'destroy'])->name('product.destroy');
    
    // lỗi ko dùng đc get
    Route::post('product/search', [AdminProductController::class, 'search'])->name('product.search');

    //Type
    Route::resource('type', AdminTypeController::class)->except(['destroy']);
    Route::get('type/{type}/delete', [AdminTypeController::class, 'destroy'])->name('type.destroy');

    //User
    Route::resource('user', AdminUserController::class)->except(['destroy','create','store']);
    Route::get('user/{user}/delete', [AdminUserController::class, 'destroy'])->name('user.destroy');
    Route::get('user/{user}/status', [AdminUserController::class, 'status'])->name('user.status');

    Route::post('user/search', [AdminUserController::class, 'search'])->name('user.search');

    
    // Specificate
    Route::resource('specId', AdminSpecificateController::class)->except(['destroy']);
    Route::get('specId/{id}/delete', [AdminSpecificateController::class, 'destroy'])->name('specId.destroy');

    // Order
    Route::get('order/status-all', [AdminOrderController::class, 'statusAll'])->name('order.statusAll');
    Route::post('order/search', [AdminOrderController::class, 'search'])->name('order.search');
    Route::get('order/{order}/status', [AdminOrderController::class, 'status'])->name('order.status');
    Route::resource('order', AdminOrderController::class)->only(['index','show']);

});
