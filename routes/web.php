<?php

use App\Http\Controllers\CommentaryPostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\File;
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

Route::get('/', [PostController::class, 'index'])->name('Posts');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}', [CommentaryPostController::class, 'store']);
Route::get('posts/', [PostController::class, 'redirect']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::get('profile', [ProfileController::class, 'show'])->middleware('auth');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('event', [EventController::class, 'create'])->middleware('auth');
Route::post('event', [EventController::class, 'store'])->middleware('auth');
/*Route::get('categories/{category:slug}', [PostController::class, 'getPostsByCategories'])->name('category');
Route::get('authors/{author:username}', [PostController::class, 'getPostsByAuthor']);*/
