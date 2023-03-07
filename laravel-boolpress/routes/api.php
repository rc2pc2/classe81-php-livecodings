<?php

use App\Http\Controllers\Api\LeadController as ApiLeadController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [ PostController::class, 'index' ])->name('api.posts.index');
Route::middleware('auth:api')->get('/posts/{post}', [ PostController::class, 'show' ])->name('api.posts.show');

Route::post('/contact-us', [ ApiLeadController::class, 'store' ])->name('api.guest.contacts');