<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('main.index');


// услуги

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/admin/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/admin/posts/', [PostController::class, 'store'])->name('post.store');
Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/admin/posts/', [PostController::class, 'update'])->name('post.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'delete'])->name('post.delete');


// категория услуги

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/categories/', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/admin/categories/', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'delete'])->name('category.delete');
