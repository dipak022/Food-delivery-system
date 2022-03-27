<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//category route here 

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'Category'])->name('category');

Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'CategoryStore'])->name('category.store');

Route::get('/category/manage', [App\Http\Controllers\CategoryController::class, 'CategoryManage'])->name('manage.category');

Route::get('/category/active/{id}', [App\Http\Controllers\CategoryController::class, 'CategoryActive'])->name('active.category');

Route::get('/category/inactive/{id}', [App\Http\Controllers\CategoryController::class, 'CategoryInactive'])->name('inactive.category');

Route::get('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'CategoryDelete'])->name('delete.category');

Route::post('/category/update', [App\Http\Controllers\CategoryController::class, 'CategoryUpdate'])->name('category.update');



//delivery route here 

Route::get('/delivery', [App\Http\Controllers\DeliveryBoyController::class, 'Delivery'])->name('delivery');

Route::post('/delivery/store', [App\Http\Controllers\DeliveryBoyController::class, 'DeliveryStore'])->name('delivery.store');

Route::get('/delivery/manage', [App\Http\Controllers\DeliveryBoyController::class, 'DeliveryManage'])->name('manage.delivery');

Route::get('/delivery/active/{id}', [App\Http\Controllers\DeliveryBoyController::class, 'DeliveryActive'])->name('active.delivery');

Route::get('/delivery/inactive/{id}', [App\Http\Controllers\DeliveryBoyController::class, 'DeliveryInactive'])->name('inactive.delivery');

Route::get('/delivery/delete/{id}', [App\Http\Controllers\DeliveryBoyController::class, 'DeliveryDelete'])->name('delete.delivery');

Route::post('/delivery/update', [App\Http\Controllers\DeliveryBoyController::class, 'DeliveryUpdate'])->name('delivery.update');


//coupon route here 

Route::get('/coupon', [App\Http\Controllers\CouponController::class, 'Coupon'])->name('coupon');

Route::post('/coupon/store', [App\Http\Controllers\CouponController::class, 'CouponStore'])->name('coupon.store');

Route::get('/coupon/manage', [App\Http\Controllers\CouponController::class, 'CouponManage'])->name('manage.coupon');

Route::get('/coupon/active/{id}', [App\Http\Controllers\CouponController::class, 'CouponActive'])->name('active.coupon');

Route::get('/coupon/inactive/{id}', [App\Http\Controllers\CouponController::class, 'CouponInactive'])->name('inactive.coupon');

Route::get('/coupon/delete/{id}', [App\Http\Controllers\CouponController::class, 'CouponDelete'])->name('delete.coupon');

Route::post('/coupon/update', [App\Http\Controllers\CouponController::class, 'CouponUpdate'])->name('coupon.update');


