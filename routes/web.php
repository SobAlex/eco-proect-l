<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/admin/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/admin/posts/', [PostController::class, 'store'])->name('post.store');
Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/admin/posts/', [PostController::class, 'update'])->name('post.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'delete'])->name('post.delete');
