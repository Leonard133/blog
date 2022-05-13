<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
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

Route::view('/index2', 'welcome')->name('welcome');

Route::get('/aboutus', [AboutController::class, 'index'])->name('about');
Route::get('/contactus', [AboutController::class, 'contact'])->name('contactus');

// Post
//Route::resource('posts', PostController::class)->parameters([
//    'posts' => 'posts:slug',
//]);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::put('/posts/{post:slug}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post:slug}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
