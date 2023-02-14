<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as ProductController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\PageController as GuestPageController;
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

Route::get('/', [GuestPageController::class, 'home'])->name('guest.home');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('home', [AdminHomeController::class, 'home'])->name('home');
    // Route::get('/', [ProductController::class, 'index'])->name('index');
    // Route::get('/create', [ProductController::class, 'create'])->name('create');
    // Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    // Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::resource('products', ProductController::class);
});

