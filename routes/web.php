<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/aa', function () {
    return view('categories.create');
});

/*  for user */
Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/plus', [PostController::class, 'paginate']);

/* for Admin */

//Route::get('/categories/all', [CategoryController::class, 'all']);
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('tags', TagController::class);


