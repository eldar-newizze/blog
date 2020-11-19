<?php

use App\Http\Controllers\UserController;
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


Route::redirect('/', 'post')->name('index');

Route::view('register', 'register')->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::view('login', 'login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/newsletter', [UserController::class, 'newsletter'])->name('newsletter');
Route::get('/exit', [UserController::class, 'exit'])->name('exit');

Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('single', 'single')->name('single');

Route::resource('post', \App\Http\Controllers\PostController::class);
Route::resource('comment', \App\Http\Controllers\CommentController::class);
