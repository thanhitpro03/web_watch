<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\users\AuthenticationController;
use Illuminate\Support\Facades\Route;




Route::prefix('/')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login',[AuthenticationController::class,'login'])->name('user.login');
    Route::post('/login',[AuthenticationController::class,'check_login']);


    Route::get('/register',[AuthenticationController::class,'register'])->name('user.register');
    Route::post('/register',[AuthenticationController::class,'check_register']);

});
