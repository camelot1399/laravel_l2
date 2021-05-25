<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//dd(Session::has('login'));
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');

Route::prefix('/news')->middleware('example:admin')->group(function() {
    Route::get('/', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
    Route::get('/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
    Route::post('/create', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
    Route::get('/{news}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
    Route::post('/update/{news}', [\App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
    Route::post('/delete/{news}', [\App\Http\Controllers\NewsController::class, 'delete'])->name('news.delete');
    Route::get('/{news}/edit', [\App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
});

//Route::get('/news/category={category}', [\App\Http\Controllers\NewsController::class, 'categoryNews'])->name('news.index');

Route::prefix('/categories')->group(function() {
    Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('/create', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
});


Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');
Route::get('/adm/create', [\App\Http\Controllers\AdmController::class, 'create'])->name('adm.create');
Route::post('/adm/create', [\App\Http\Controllers\AdmController::class, 'store'])->name('adm.store');

Route::prefix('/feedback')->group(function() {
    Route::get('/', [\App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback.index');
    Route::get('/create', [\App\Http\Controllers\FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('/create', [\App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.store');
});

Route::prefix('/order')->group(function() {
    Route::get('/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
    Route::post('/create', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
});

Route::prefix('/adminpanel')->group(function() {
    Route::get('/', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'index'])->name('adminpanel.index');
    Route::get('/userList', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'userList'])->name('adminpanel.userList');
    Route::get('/userList/userEdit/{user}', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'userEdit'])->name('adminpanel.userEdit');
    Route::post('/userList/userEdit/{user}', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'userUpdate'])->name('adminpanel.userUpdate');
    Route::post('/userList/userDelete/{user}', [\App\Http\Controllers\AdminPanel\AdminPanelController::class, 'userDelete'])->name('adminpanel.userDelete');
});


require __DIR__.'/auth.php';
