<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/list', ListController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/person', PersonController::class);
Route::resource('/phone', PhoneController::class);

