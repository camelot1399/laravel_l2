<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/news/category={category}', [\App\Http\Controllers\NewsController::class, 'categoryNews'])->name('news.index');

Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');

Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');

Route::get('/adm', [\App\Http\Controllers\AdmController::class, 'index'])->name('adm.index');
