<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
->name('home');

Route::prefix('admin')->middleware('is-admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    // PRODUCTS
    Route::resource('products', ProductController::class);

    // CATEGORIES
    Route::resource('categories', CategoryController::class);

    // Content
    Route::resource('contents', ContentController::class);

    // News
    Route::resource('news',NewsController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//PRODUCTS FRONTEND
Route::get('/shop', [ProductController::class , 'frontendIndex'])->name('product.frontendIndex');
Route::get('/shop/product/{product}', [ProductController::class , 'show'])->name('product.detail');

//CONTENT FRONTEND
Route::get('/content', [ContentController::class, 'frontendIndex'])->name('content.frontendIndex');
Route::get('/content/{content}', [ContentController::class, 'show'])->name('content.detail');

// NEWS FRONTEND
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.detail');
Route::get('/news', [NewsController::class, 'frontendIndex'])->name('news.frontendIndex');