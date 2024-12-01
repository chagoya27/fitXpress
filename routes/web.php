<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingInController;
use App\Http\Controllers\SingUpController;



Route::get('/',[SingInController::class,'index']);
Route::get('/private',[SingInController::class,'page'])->name('private');
Route::post('/inicia-sesion', [SingInController::class, 'login'])->name('inicia-sesion');



Route::get('/SingUp/create',[SingUpController::class,'index']);
Route::post('/SingUp', [SingUpController::class,'store']);

