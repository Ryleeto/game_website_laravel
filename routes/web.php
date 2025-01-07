<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'index'])->name('index');

Route::get('/contact', [BasicController::class, 'contact'])->name('contact');

Route::get('/product-details', [BasicController::class, 'productDetails'])->name('details');

Route::get('/shop', [BasicController::class, 'shop'])->name('shop');
