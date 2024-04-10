<?php

use App\Http\Controllers\TestController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


// test route
Route::get('test/{id}', [TestController::class, 'test']);


// Видимая часть
Route::get('/', App\Http\Controllers\MainController::class)->name('main.index');
Route::get('/categories', App\Http\Controllers\Category\IndexController::class)->name('category.index');
Route::get('/categories/{category}', App\Http\Controllers\Category\ShowController::class)->name('category.show');
Route::get('/posts/{post}', App\Http\Controllers\Post\ShowController::class)->name('post.show');
Route::get('/contact', App\Http\Controllers\Contact\IndexController::class)->name('contact.index');

Route::group(['middleware' => ['auth', 'isadmin']], function () {

    // Админка
    Route::get('/admin/home', App\Http\Controllers\Admin\HomeController::class)->name('admin.home.index');

    Route::get('/admin/posts', App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.post.index');
    Route::get('/admin/posts/create', App\Http\Controllers\Admin\Post\CreateController::class)->name('admin.post.create');
    Route::get('/admin/posts/{post}', App\Http\Controllers\Admin\Post\ShowController::class)->name('admin.post.show');
    Route::post('/admin/posts/', App\Http\Controllers\Admin\Post\StoreController::class)->name('admin.post.store');
    Route::get('/admin/posts/{post}/edit', App\Http\Controllers\Admin\Post\EditController::class)->name('admin.post.edit');
    Route::put('/admin/posts/{post}', App\Http\Controllers\Admin\Post\UpdateController::class)->name('admin.post.update');
    Route::delete('/admin/posts/{post}', App\Http\Controllers\Admin\Post\DeleteController::class)->name('admin.post.delete');

    Route::get('/admin/categories', App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
    Route::get('/admin/categories/create', App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
    Route::get('/admin/categories/{category}', App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
    Route::post('/admin/categories/', App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
    Route::get('/admin/categories/{category}/edit', App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
    Route::put('/admin/categories/{category}', App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
    Route::delete('/admin/categories/{category}', App\Http\Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');

    Route::get('/admin/contacts', App\Http\Controllers\Admin\Contact\IndexController::class)->name('admin.contact.index');
    Route::get('/admin/contacts/create', App\Http\Controllers\Admin\Contact\CreateController::class)->name('admin.contact.create');
    Route::get('/admin/contacts/{contact}', App\Http\Controllers\Admin\Contact\ShowController::class)->name('admin.contact.show');
    Route::post('/admin/contacts/', App\Http\Controllers\Admin\Contact\StoreController::class)->name('admin.contact.store');
    Route::get('/admin/contacts/{contact}/edit', App\Http\Controllers\Admin\Contact\EditController::class)->name('admin.contact.edit');
    Route::put('/admin/contacts/{contact}', App\Http\Controllers\Admin\Contact\UpdateController::class)->name('admin.contact.update');
    Route::delete('/admin/contacts/{contact}', App\Http\Controllers\Admin\Contact\DeleteController::class)->name('admin.contact.delete');
});

Auth::routes();
