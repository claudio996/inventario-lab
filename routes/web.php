<?php

use App\Http\Controllers\SpecialityController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/specialities', [App\Http\Controllers\SpecialityController::class, 'index']);
Route::get('/specialities/create', [App\Http\Controllers\SpecialityController::class, 'create']);
Route::get('/specialities/{speciality}/edit', [App\Http\Controllers\SpecialityController::class, 'edit']);
Route::post('/specialities', [App\Http\Controllers\SpecialityController::class, 'senData']);