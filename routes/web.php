<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingInController;
use App\Http\Controllers\SingUpController;



Route::get('/login',[SingInController::class,'index']);



Route::get('/SingUp/create',[SingUpController::class,'index']);
Route::post('/SingUp', [SingUpController::class,'store']);

