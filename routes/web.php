<?php

use App\Http\Controllers\WEB\CategoryController;
use App\Http\Controllers\WEB\ProductController;
use App\Http\Controllers\WEB\ProductGalleryController;
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

Route::middleware(['auth'])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::resource('/category', CategoryController::class);
        Route::resource('/product', ProductController::class);

        Route::resource('/product.gallery', ProductGalleryController::class);
    });
});
