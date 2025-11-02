<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\GenderController;
use App\Http\Controllers\Admin\HamletController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\MarriageController;
use App\Http\Controllers\Admin\ReligionController;
use App\Http\Controllers\Admin\IncomeController;
use App\Http\Controllers\Admin\ShoppingController;
use App\Http\Controllers\Admin\FinancingController;
use App\Http\Controllers\Admin\StuntingController;
use App\Http\Controllers\Admin\SocialAssistanceController;
use App\Http\Controllers\Admin\IdmStatusController;

use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\VisionController;
use App\Http\Controllers\Admin\MissionController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['authenticate'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);

    Route::prefix('/master')->name('master.')->group(function () {
        Route::resource('education', EducationController::class);
        Route::resource('gender', GenderController::class);
        Route::resource('hamlet', HamletController::class);
        Route::resource('job', JobController::class);
        Route::resource('marriage', MarriageController::class);
        Route::resource('religion', ReligionController::class);
        Route::resource('income', IncomeController::class);
        Route::resource('shopping', ShoppingController::class);
        Route::resource('financing', FinancingController::class);
        Route::resource('stunting', StuntingController::class);
        Route::resource('social_assistance', SocialAssistanceController::class);
        Route::resource('idm_status', IdmStatusController::class);
    });

    Route::prefix('/settings')->controller(SettingsController::class)->name('settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::put('/update/{village}', 'update')->name('update');
    });

    Route::resource('vision', VisionController::class);
    Route::resource('mission', MissionController::class);
});
