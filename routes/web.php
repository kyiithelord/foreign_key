<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/list', ListController::class);
Route::resource('/category', CategoryController::class);
