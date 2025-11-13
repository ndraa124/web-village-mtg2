<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Master Data
|--------------------------------------------------------------------------
*/
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
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\LegalProductsCategoryController;

/*
|--------------------------------------------------------------------------
| Infographics
|--------------------------------------------------------------------------
*/
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
use App\Http\Controllers\Admin\InfographicsApbdDevRealizationController;
use App\Http\Controllers\Admin\InfographicsStuntingController;
use App\Http\Controllers\Admin\InfographicsSocialAssistanceController;
use App\Http\Controllers\Admin\InfographicsIdmController;
use App\Http\Controllers\Admin\InfographicsIdmIksController;
use App\Http\Controllers\Admin\InfographicsIdmIkeController;
use App\Http\Controllers\Admin\InfographicsIdmIklController;
use App\Http\Controllers\Admin\InfographicsSdgsController;

/*
|--------------------------------------------------------------------------
| Content Public
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\HistoryTimelineController;
use App\Http\Controllers\Admin\VisionController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ManageLegalProductController;
use App\Http\Controllers\Admin\AntiCorruptGovernanceController;
use App\Http\Controllers\Admin\AntiCorruptSupervisionController;
use App\Http\Controllers\Admin\AntiCorruptServiceQualityController;
use App\Http\Controllers\Admin\AntiCorruptParticipateController;
use App\Http\Controllers\Admin\AntiCorruptLocalWisdomController;

/*
|--------------------------------------------------------------------------
| Others
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;

Route::middleware(['authenticate'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/master')
        ->name('master.')
        ->group(function () {
            Route::resource('education', EducationController::class)->except(['show']);

            Route::resource('gender', GenderController::class)->except(['show']);

            Route::resource('hamlet', HamletController::class)->except(['show']);

            Route::resource('job', JobController::class)->except(['show']);

            Route::resource('marriage', MarriageController::class)->except(['show']);

            Route::resource('religion', ReligionController::class)->except(['show']);

            Route::resource('income', IncomeController::class)->except(['show']);

            Route::resource('shopping', ShoppingController::class)->except(['show']);

            Route::resource('financing', FinancingController::class)->except(['show']);

            Route::resource('stunting', StuntingController::class)->except(['show']);

            Route::resource('social-assistance', SocialAssistanceController::class)
                ->parameter('social-assistance', 'socialAssistance')
                ->except(['show']);

            Route::resource('idm-status', IdmStatusController::class)
                ->parameter('idm-status', 'idmStatus')
                ->except(['show']);

            Route::resource('news-category', NewsCategoryController::class)
                ->parameter('news-category', 'category')
                ->except(['show']);

            Route::resource('legal-product-category', LegalProductsCategoryController::class)
                ->parameter('legal-product-category', 'category')
                ->except(['show']);
        });

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
                        ->parameter('age', 'residentAge')
                        ->except(['show']);

                    Route::resource('hamlet', InfographicsResidentHamletController::class)
                        ->parameter('hamlet', 'residentHamlet')
                        ->except(['show']);

                    Route::resource('education', InfographicsResidentEducationController::class)
                        ->parameters(['education' => 'residentEducation'])
                        ->except(['show']);

                    Route::resource('job', InfographicsResidentJobController::class)
                        ->parameters(['job' => 'residentJob'])
                        ->except(['show']);

                    Route::resource('must_select', InfographicsResidentMustSelectController::class)
                        ->parameters(['must_select' => 'residentMustSelect'])
                        ->except(['show']);

                    Route::resource('marriage', InfographicsResidentMarriageController::class)
                        ->parameters(['marriage' => 'residentMarriage'])
                        ->except(['show']);

                    Route::resource('religion', InfographicsResidentReligionController::class)
                        ->parameters(['religion' => 'residentReligion'])
                        ->except(['show']);
                });

            Route::prefix('/apbd')
                ->name('apbd.')
                ->group(function () {
                    Route::resource('income', InfographicsApbdIncomeController::class)
                        ->parameters(['income' => 'apbdIncome']);

                    Route::resource('shopping', InfographicsApbdShoppingController::class)
                        ->parameters(['shopping' => 'apbdShopping'])
                        ->except(['show']);

                    Route::resource('financing', InfographicsApbdFinancingController::class)
                        ->parameters(['financing' => 'apbdFinancing'])
                        ->except(['show']);

                    Route::resource('development-realization', InfographicsApbdDevRealizationController::class)
                        ->parameter('development-realization', 'apbdRealization')
                        ->except(['show']);

                    Route::resource('/', InfographicsApbdController::class)
                        ->parameters(['' => 'apbd']);
                });

            Route::resource('stunting', InfographicsStuntingController::class)
                ->except(['show']);

            Route::resource('social-assistance', InfographicsSocialAssistanceController::class)
                ->parameters(['social-assistance' => 'socialAssistance']);

            Route::prefix('/idm')
                ->name('idm.')
                ->group(function () {
                    Route::resource('iks', InfographicsIdmIksController::class)
                        ->parameters(['iks' => 'idmIks']);

                    Route::resource('ike', InfographicsIdmIkeController::class)
                        ->parameters(['ike' => 'idmIke']);

                    Route::resource('ikl', InfographicsIdmIklController::class)
                        ->parameters(['ikl' => 'idmIkl']);

                    Route::resource('/', InfographicsIdmController::class)
                        ->parameters(['' => 'idm']);
                });

            Route::resource('sdgs', InfographicsSdgsController::class)
                ->parameters(['sdgs' => 'sdg'])
                ->except(['show']);
        });

    Route::prefix('/content')
        ->name('content.')
        ->group(function () {
            Route::resource('slider', SliderController::class);

            Route::resource('galleries', GalleryController::class)
                ->names('galleries')
                ->except(['show']);

            Route::prefix('/profile')
                ->name('profile.')
                ->group(function () {
                    Route::prefix('history')
                        ->name('history.')
                        ->group(function () {
                            Route::resource('timeline', HistoryTimelineController::class)
                                ->names('timeline')
                                ->except(['index', 'show']);

                            Route::resource('/', HistoryController::class)
                                ->parameter('', 'history')
                                ->except(['show', 'destroy']);
                        });

                    Route::prefix('vision-mission')
                        ->name('vision-mission.')
                        ->group(function () {
                            Route::resource('vision', VisionController::class)
                                ->except(['show']);
                            Route::resource('mission', MissionController::class)
                                ->except(['show']);
                        });
                });

            Route::resource('news', NewsController::class);

            Route::resource('legal-product', ManageLegalProductController::class)
                ->parameter('legal-product', 'legalProduct');

            Route::prefix('/anti-corruption')
                ->name('anti.')
                ->group(function () {
                    Route::resource('governance', AntiCorruptGovernanceController::class)
                        ->parameters(['governance' => 'antiCorrupt']);

                    Route::resource('supervision', AntiCorruptSupervisionController::class)
                        ->parameters(['supervision' => 'antiCorrupt']);

                    Route::resource('service-quality', AntiCorruptServiceQualityController::class)
                        ->parameters(['service-quality' => 'antiCorrupt']);

                    Route::resource('participate', AntiCorruptParticipateController::class)
                        ->parameters(['participate' => 'antiCorrupt']);

                    Route::resource('local-wisdom', AntiCorruptLocalWisdomController::class)
                        ->parameters(['local-wisdom' => 'antiCorrupt']);
                });
        });

    Route::resource('users', UserController::class);

    Route::prefix('/settings')
        ->controller(SettingsController::class)
        ->name('settings.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::put('/update/{village}', 'update')->name('update');
        });
});
