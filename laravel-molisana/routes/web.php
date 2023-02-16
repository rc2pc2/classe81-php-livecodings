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

// Route::get('/', [GuestPageController::class, 'home'])->name('guest.home');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('home', [AdminHomeController::class, 'home'])->name('home');

    // Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    // Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    // Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    // Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    // Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    // Route::put('/products/{product}', [ProductController::class, 'edit'])->name('products.edit');
    // Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::resource('products', ProductController::class);
});

