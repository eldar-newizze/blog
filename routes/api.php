<?php

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

Route::prefix('auth')->group(function (){
    Route::get('/init', [\App\Http\Controllers\AppController::class, 'init'])->name('init');

    Route::post('/login', [\App\Http\Controllers\AppController::class, 'login'])->name('login');
    Route::post('/register', [\App\Http\Controllers\AppController::class, 'register'])->name('register');
    Route::get('/logout', [\App\Http\Controllers\AppController::class, 'logout'])->name('logout');

});

Route::resource('posts', \App\Http\Controllers\Api\v1\PostController::class);
Route::resource('categories', \App\Http\Controllers\Api\v1\CategoryController::class);
Route::resource('comments', \App\Http\Controllers\Api\v1\CommentsController::class);

Route::post('/categories/{id}', [\App\Http\Controllers\Api\v1\CategoryController::class, 'sortCategories'])
    ->name('categories-sort');
Route::post('/comments/{id}', [\App\Http\Controllers\Api\v1\CommentsController::class, 'sortComments'])
    ->name('comments-sort');
