<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create']);
Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::post('/categories/store', [App\Http\Controllers\CategoriesController::class, 'store']);

Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'index']);
Route::get('/articles/create', [App\Http\Controllers\ArticlesController::class, 'create']);
Route::get('/articles/{category}/edit', [App\Http\Controllers\ArticlesController::class, 'edit']);
Route::post('/articles/store', [App\Http\Controllers\ArticlesController::class, 'store']);