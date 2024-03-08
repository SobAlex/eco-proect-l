<?php

use Illuminate\Support\Facades\Route;


// Видимая часть
Route::get('/', App\Http\Controllers\MainController::class)->name('main.index');
Route::get('/categories', App\Http\Controllers\Category\IndexController::class)->name('category.index');
Route::get('/categories/{category}', App\Http\Controllers\Category\ShowController::class)->name('category.show');
Route::get('/posts/{post}', App\Http\Controllers\Post\ShowController::class)->name('post.show');


// Админка
Route::get('/admin/home', App\Http\Controllers\Admin\HomeController::class)->name('admin.home.index');

Route::get('/admin/posts', App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.post.index');
Route::get('/admin/posts/create', App\Http\Controllers\Admin\Post\CreateController::class)->name('admin.post.create');
Route::get('/admin/posts/{post}', App\Http\Controllers\Admin\Post\ShowController::class)->name('admin.post.show');
Route::post('/admin/posts/', App\Http\Controllers\Admin\Post\StoreController::class)->name('admin.post.store');
Route::get('/admin/posts/{post}/edit', App\Http\Controllers\Admin\Post\EditController::class)->name('admin.post.edit');
Route::put('/admin/posts/', App\Http\Controllers\Admin\Post\UpdateController::class)->name('admin.post.update');
Route::delete('/admin/posts/{post}', App\Http\Controllers\Admin\Post\DeleteController::class)->name('admin.post.delete');

Route::get('/admin/categories', App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
Route::get('/admin/categories/create', App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
Route::get('/admin/categories/{category}', App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
Route::post('/admin/categories/', App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
Route::get('/admin/categories/{category}/edit', App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
Route::put('/admin/categories/', App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
Route::delete('/admin/categories/{category}', App\Http\Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');
