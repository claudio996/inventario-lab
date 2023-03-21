<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create']);
Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::get('/categories/update_status/{id}', [App\Http\Controllers\CategoriesController::class, 'update_status']);
Route::get('/categories/destroy/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy']);
Route::put('/categories/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update']);
Route::post('/categories/store', [App\Http\Controllers\CategoriesController::class, 'store']);


Route::get('/dependences', [App\Http\Controllers\dependenceController::class, 'index']);
Route::get('/dependences/create', [App\Http\Controllers\dependenceController::class, 'create']);
Route::get('/dependences/edit/{id}', [App\Http\Controllers\dependenceController::class, 'edit']);
Route::get('/dependences/update_status/{id}', [App\Http\Controllers\dependenceController::class, 'update_status']);
Route::get('/dependences/destroy/{id}', [App\Http\Controllers\dependenceController::class, 'destroy']);
Route::put('/dependences/update/{id}', [App\Http\Controllers\dependenceController::class, 'update']);
Route::post('/dependences/store', [App\Http\Controllers\dependenceController::class, 'store']);

// Route::get('/prestacion', [App\Http\Controllers\prestacionController::class, 'index']);


Route::get('prestaciones', [App\Http\Controllers\PrestacionController::class, 'index']);

Route::post('full-calender/action', [EventController::class, 'action']);









Route::get('/items', [App\Http\Controllers\ItemController::class, 'index']);
Route::get('/items/create', [App\Http\Controllers\ItemController::class, 'create']);
Route::post('/items/store', [App\Http\Controllers\ItemController::class, 'store']);