<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/aa', function () {
    return view('categories.create');
});

/*  for user */
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/edit', [PostController::class, 'edit']);
Route::post('/posts/update', [PostController::class, 'update']);
Route::delete('/posts/delete', [PostController::class, 'destroy']);

/* for Admin */


Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);


