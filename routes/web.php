<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/newsId/:id', [\App\Http\Controllers\NewsController::class, 'newsId']);
