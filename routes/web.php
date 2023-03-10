<?php

use App\Http\Controllers\SpecialityController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create']);
Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'senData']);