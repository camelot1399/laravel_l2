<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'show']);
Route::get('/category/{category}', [\App\Http\Controllers\CategoryController::class, 'show']);
