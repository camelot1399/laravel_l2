<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('/news/create', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::get('/news/{news}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
//Route::get('/news/category={category}', [\App\Http\Controllers\NewsController::class, 'categoryNews'])->name('news.index');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');
Route::get('/adm/create', [\App\Http\Controllers\AdmController::class, 'create'])->name('adm.create');
Route::post('/adm/create', [\App\Http\Controllers\AdmController::class, 'store'])->name('adm.store');

Route::get('/feedback', [\App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [\App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
Route::post('/order/create', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
require __DIR__.'/auth.php';
