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


