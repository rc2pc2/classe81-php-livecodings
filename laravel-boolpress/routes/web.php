<?php

use App\Http\Controllers\Admin\DashboardController as DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use App\Http\Controllers\Guest\PostController as GuestPostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [GuestPostController::class, 'index'])->name('guests.index');



Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group( function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/posts', AdminPostController::class);
    Route::delete('/posts/{post}/clear-category',  [AdminPostController::class, 'clearCategory'])->name('posts.clearCategory');
    Route::delete('/posts/{post}/clear-tags',  [AdminPostController::class, 'clearTags'])->name('posts.clearTags');

    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/tags', AdminTagController::class);

    // altre rotte che voglio essere protette da login e che siano in admin
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
