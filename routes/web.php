<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});

/*  for user */
Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/plus', [PostController::class, 'paginate']);

/* for Admin */

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/plus', [CategoryController::class, 'paginate']);
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('tags', TagController::class);


