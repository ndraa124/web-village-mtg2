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

use App\Http\Controllers\Admin\InfographicsResidentController;
use App\Http\Controllers\Admin\InfographicsResidentAgeController;
use App\Http\Controllers\Admin\InfographicsResidentHamletController;
use App\Http\Controllers\Admin\InfographicsResidentEducationController;
use App\Http\Controllers\Admin\InfographicsResidentJobController;
use App\Http\Controllers\Admin\InfographicsResidentMustSelectController;
use App\Http\Controllers\Admin\InfographicsResidentMarriageController;
use App\Http\Controllers\Admin\InfographicsResidentReligionController;

use App\Http\Controllers\Admin\InfographicsApbdController;
use App\Http\Controllers\Admin\InfographicsApbdYearController;
use App\Http\Controllers\Admin\InfographicsApbdIncomeController;
use App\Http\Controllers\Admin\InfographicsApbdShoppingController;
use App\Http\Controllers\Admin\InfographicsApbdFinancingController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['authenticate'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);

    Route::prefix('/master')
        ->name('master.')
        ->group(function () {
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

    Route::prefix('/settings')
        ->controller(SettingsController::class)
        ->name('settings.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::put('/update/{village}', 'update')->name('update');
        });

    Route::resource('vision', VisionController::class);
    Route::resource('mission', MissionController::class);

    Route::prefix('/infographics')
        ->name('infographics.')
        ->group(function () {
            Route::prefix('/resident')
                ->name('resident.')
                ->group(function () {
                    Route::controller(InfographicsResidentController::class)->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('/edit/{resident}', 'edit')->name('edit');
                        Route::put('/update/{resident}', 'update')->name('update');
                    });

                    Route::resource('age', InfographicsResidentAgeController::class)
                        ->parameter('age', 'residentAge');
                    Route::resource('hamlet', InfographicsResidentHamletController::class)
                        ->parameter('hamlet', 'residentHamlet');
                    Route::resource('education', InfographicsResidentEducationController::class)
                        ->parameters(['education' => 'residentEducation']);
                    Route::resource('job', InfographicsResidentJobController::class)
                        ->parameters(['job' => 'residentJob']);
                    Route::resource('must_select', InfographicsResidentMustSelectController::class)
                        ->parameters(['must_select' => 'residentMustSelect']);
                    Route::resource('marriage', InfographicsResidentMarriageController::class)
                        ->parameters(['marriage' => 'residentMarriage']);
                    Route::resource('religion', InfographicsResidentReligionController::class)
                        ->parameters(['religion' => 'residentReligion']);
                });

            Route::prefix('/apbd')
                ->name('apbd.')
                ->group(function () {
                    Route::controller(InfographicsApbdController::class)->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('/create', 'create')->name('create');
                        Route::post('/store', 'store')->name('store');
                        Route::get('/show/{apbd}', 'show')->name('show');
                        Route::get('/edit/{apbd}', 'edit')->name('edit');
                        Route::put('/update/{apbd}', 'update')->name('update');
                        Route::delete('/destroy/{apbd}', 'destroy')->name('destroy');
                    });

                    Route::resource('year', InfographicsApbdYearController::class)
                        ->parameters(['year' => 'apbdYear']);
                    Route::resource('income', InfographicsApbdIncomeController::class)
                        ->parameters(['income' => 'apbdIncome']);
                    Route::resource('shopping', InfographicsApbdShoppingController::class)
                        ->parameters(['shopping' => 'apbdShopping']);
                    Route::resource('financing', InfographicsApbdFinancingController::class)
                        ->parameters(['financing' => 'apbdFinancing']);
                });
        });
});
