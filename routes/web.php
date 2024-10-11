<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('admin')->middleware('is-admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    // PRODUCTS
    Route::resource('products', ProductController::class);

    // CATEGORIES
    Route::resource('categories', CategoryController::class);

    // Content
    Route::resource('Contents', ContentController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//SHOP
Route::get('/shop', [ProductController::class , 'frontendIndex'])->name('product.frontendIndex');

//PRODUCTS
Route::get('/shop/product/{product}', [ProductController::class , 'show'])->name('product.detail');

//Content
