<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingInController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/',[SingInController::class,'index']);

Route::post('/inicia-sesion', [SingInController::class, 'login'])->name('inicia-sesion');

Route::get('admin', [ProductController::class, 'admin'])->name('admin');

Route::get('/private',[ProductController::class,'index'])->name('private');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');





Route::get('/SingUp/create',[SingUpController::class,'index']);
Route::post('/SingUp', [SingUpController::class,'store']);

