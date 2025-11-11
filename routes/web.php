<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\VisionMissionController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\InfographicsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PotentialController;
use App\Http\Controllers\LegalProductsController;
use App\Http\Controllers\GovernanceController;
use App\Http\Controllers\SupervisionController;
use App\Http\Controllers\ServiceQualityController;
use App\Http\Controllers\ParticipateController;
use App\Http\Controllers\LocalWisdomController;

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
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LegalProductsCategoryController;

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
use App\Http\Controllers\Admin\InfographicsApbdDevRealizationController;

use App\Http\Controllers\Admin\InfographicsStuntingController;
use App\Http\Controllers\Admin\InfographicsSocialAssistanceController;

use App\Http\Controllers\Admin\InfographicsIdmController;
use App\Http\Controllers\Admin\InfographicsIdmIksController;
use App\Http\Controllers\Admin\InfographicsIdmIkeController;
use App\Http\Controllers\Admin\InfographicsIdmIklController;

use App\Http\Controllers\Admin\InfographicsSdgsController;

use App\Http\Controllers\Admin\ManageNewsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ManageLegalProductController;

use App\Http\Controllers\Admin\AntiCorruptGovernanceController;
use App\Http\Controllers\Admin\AntiCorruptSupervisionController;
use App\Http\Controllers\Admin\AntiCorruptServiceQualityController;
use App\Http\Controllers\Admin\AntiCorruptParticipateController;
use App\Http\Controllers\Admin\AntiCorruptLocalWisdomController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact/send', [HomeController::class, 'sendContactEmail'])->name('contact.send');

Route::prefix('/profile')
    ->name('profile.')
    ->group(function () {
        Route::get('/history', [HistoryController::class, 'index'])->name('history');
        Route::get('/vision-mission', [VisionMissionController::class, 'index'])->name('vision');
        Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');
    });

Route::prefix('/public/infographics')
    ->name('public.infographics.')
    ->group(function () {
        Route::get('/', [InfographicsController::class, 'index'])->name('index');

        Route::get('/apbdes', [InfographicsController::class, 'apbdes'])->name('apbdes');
        Route::get('/stunting', [InfographicsController::class, 'stunting'])->name('stunting');
        Route::get('/social-assistance', [InfographicsController::class, 'socialAssistance'])->name('social_assistance');
        Route::get('/idm', [InfographicsController::class, 'idm'])->name('idm');
        Route::get('/sdgs', [InfographicsController::class, 'sdgs'])->name('sdgs');
    });

Route::prefix('/news')
    ->controller(NewsController::class)
    ->name('news.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/category/{category:slug}', 'index')->name('category');
        Route::get('/tag/{tag:slug}', 'index')->name('tag');
        Route::get('/{news:slug}', 'show')->name('show');
    });

Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/potential', [PotentialController::class, 'index'])->name('potential.index');
Route::get('/legal-products', [LegalProductsController::class, 'index'])->name('legal-products.index');

Route::prefix('/anti-corruption')
    ->name('anti.')
    ->group(function () {
        Route::get('/governance', [GovernanceController::class, 'index'])->name('governance.index');
        Route::get('/supervision', [SupervisionController::class, 'index'])->name('supervision.index');
        Route::get('/service-quality', [ServiceQualityController::class, 'index'])->name('service-quality.index');
        Route::get('/participate', [ParticipateController::class, 'index'])->name('participate.index');
        Route::get('/local-wisdom', [LocalWisdomController::class, 'index'])->name('local-wisdom.index');
    });

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
            Route::resource('category', CategoryController::class)->except(['show']);
            Route::resource('legal-product-category', LegalProductsCategoryController::class)
                ->parameter('legal-product-category', 'category')
                ->except(['show']);
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
                    Route::resource('development-realization', InfographicsApbdDevRealizationController::class)
                        ->parameter('development-realization', 'apbdRealization')
                        ->except(['show']);
                });

            Route::resource('stunting', InfographicsStuntingController::class)
                ->parameters(['stunting' => 'stunting']);
            Route::resource('social-assistance', InfographicsSocialAssistanceController::class)
                ->parameters(['social_assistance' => 'socialAssistance']);

            Route::prefix('/idm')
                ->name('idm.')
                ->group(function () {
                    Route::controller(InfographicsIdmController::class)->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('/create', 'create')->name('create');
                        Route::post('/store', 'store')->name('store');
                        Route::get('/show/{idm}', 'show')->name('show');
                        Route::get('/edit/{idm}', 'edit')->name('edit');
                        Route::put('/update/{idm}', 'update')->name('update');
                        Route::delete('/destroy/{idm}', 'destroy')->name('destroy');
                    });

                    Route::resource('iks', InfographicsIdmIksController::class)
                        ->parameters(['iks' => 'idmIks']);
                    Route::resource('ike', InfographicsIdmIkeController::class)
                        ->parameters(['ike' => 'idmIke']);
                    Route::resource('ikl', InfographicsIdmIklController::class)
                        ->parameters(['ikl' => 'idmIkl']);
                });

            Route::resource('sdgs', InfographicsSdgsController::class)
                ->parameters(['sdgs' => 'sdg']);
        });

    Route::resource('manage-news', ManageNewsController::class)
        ->parameters(['manage-news' => 'manageNews']);
    Route::resource('galleries', GalleryController::class)
        ->names('galleries')
        ->except(['show']);
    Route::resource('manage-legal-product', ManageLegalProductController::class)
        ->parameter('manage-legal-product', 'legalProduct');

    Route::prefix('/manage-anti-corruption')
        ->name('manage.anti.')
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
