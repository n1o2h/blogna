<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
/* for user */
Route::get('/',[UserController::class, 'index']);
Route::get('/users/all',[UserController::class, 'all'])->name('users.all');

/* for user */

/* for Admin */

/*  for posts */
Route::get('/admin', [PostController::class, 'index'])->name('admin.index');
Route::get('/admin/show/{id}', [PostController::class, 'show'])->name('admin.show');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/admin/posts/{post}', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/admin/posts/{post}',[PostController::class, 'update'])->name('admin.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('admin.destroy');

/* for categogies
Route::get('/admin', [CategoryController::class, 'index'])->name('admin.index');
 */
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/categories/{categorie}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/admin/categories/{categorie}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{categorie}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

/* for tags */
//Route::get('/admin/index', [tagController::class, 'index']);
Route::get('/admin/tags/create', [tagController::class, 'create'])->name('admin.tags.create');
Route::post('/admin/tags', [tagController::class, 'store'])->name('admin.tags.store');
Route::get('/admin/tags/{tag}', [tagController::class, 'edit'])->name('admin.tags.edit');
Route::put('/admin/tags/{tag}', [tagController::class, 'update'])->name('admin.tags.update');
Route::delete('/admin/tags/{tag}', [tagController::class, 'destroy'])->name('admin.tags.destroy');
/* for tags */

/* for Admin */

/**
Route::resource('categories', CategoryController::class);
 *
 */



