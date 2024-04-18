<?php

use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;




Route::controller(LoginUserController::class)->group(function () {
    Route::get('/login', 'LoginShow')->name('login');
});
Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'RegisterShow')->name('register');
    Route::post('/register/store' ,'RegisterStore')->name('register.store');
});