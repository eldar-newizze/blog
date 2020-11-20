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
