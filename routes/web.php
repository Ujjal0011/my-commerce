<?php

use App\Http\Controllers\MyCommerceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MyCommerceController::class, 'index'])->name('home');
Route::get('/product-category', [MyCommerceController::class, 'category'])->name('product.category');
Route::get('/product-details', [MyCommerceController::class, 'details'])->name('product.details');



