<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\EducationController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['authenticate'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);

    Route::prefix('/master')->name('master.')->group(function () {
        Route::resource('education', EducationController::class);
    });
});
