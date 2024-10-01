<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
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

    // Route::get('/products', [ProductController::class, 'adminIndex'])->name('admin.product.index');
    // Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
    // Route::post('/products/', [ProductController::class, 'store'])->name('admin.product.store');
    // Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    // Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.product.update');
    // Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
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

//LORE