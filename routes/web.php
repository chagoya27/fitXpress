<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingInController;
use App\Http\Controllers\SingUpController;


Route::get('/', [SingInController::class, 'index'])->name('home');
Route::post('/custom-login', [SingInController::class, 'index'])->name('custom-login');
Route::get('/logados', [SingInController::class, 'pageIn'])->name('logados');



Route::get('/SingUp/create',[SingUpController::class,'index']);
Route::post('/SingUp', [SingUpController::class,'store']);

