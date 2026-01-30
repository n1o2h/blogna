<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
/* for user */
Route::get('/', function () {
    return view('index');
});
/* for user */

/* for Admin */

/*  for posts */
Route::get('/admin/index', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/edit', [PostController::class, 'edit']);
Route::post('/posts/update', [PostController::class, 'update']);
Route::delete('/posts/delete', [PostController::class, 'destroy']);

/* for categogies */
Route::get('/admin/index', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/store', [CategoryController::class, 'store']);
Route::get('/categories/edit', [CategoryController::class, 'edit']);
Route::post('/categories/update', [CategoryController::class, 'update']);
Route::delete('/categories/delete', [CategoryController::class, 'destroy']);

/* for tags */
Route::get('/admin/index', [tagController::class, 'index']);
Route::get('/tags/create', [tagController::class, 'create']);
Route::post('/tags/store', [tagController::class, 'store']);
Route::get('/tags/edit', [tagController::class, 'edit']);
Route::post('/tags/update', [tagController::class, 'update']);
Route::delete('/tags/delete', [tagController::class, 'destroy']);
/* for tags */

/* for Admin */


Route::resource('categories', CategoryController::class);



