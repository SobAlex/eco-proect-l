<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
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

// Главная
Route::get('/', [MainController::class, 'index'])->name('main.index');

// Список категорий с анонсом услуг в видимой части
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');

// Список категорий с услугами в видимой части
Route::get('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

// Страница услуги
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

// Домашняя пользователя
Route::get('/admin/home', [HomeController::class, 'index'])->name('home.index');

// услуги
Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.post.index');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.post.create');
Route::get('/admin/posts/{post}', [PostController::class, 'show'])->name('admin.post.show');
Route::post('/admin/posts/', [PostController::class, 'store'])->name('admin.post.store');
Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
Route::put('/admin/posts/', [PostController::class, 'update'])->name('admin.post.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'delete'])->name('admin.post.delete');


// категории услуг
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
Route::post('/admin/categories/', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/categories/', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
