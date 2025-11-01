<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::controller(LoginController::class)->group(function () {
    Route::get('/', function () {
        return redirect()->route('auth.login');
    });

    Route::get('/login', 'index')->name('login');;
    Route::post('/login', 'login')->name('login.attempt');
    Route::post('/logout', 'logout')->name('logout');
});
