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
use App\Http\Controllers\MaklumatController;

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

Route::prefix('/service')
    ->controller(ServiceController::class)
    ->name('service.')
    ->group(function () {
        Route::get('/tracking', 'trackingSubmission')->name('submission.tracking');
        Route::post('/tracking/check', 'trackingCheck')->name('submission.tracking.check');
        Route::get('/tracking/result/{submission:tracking_number}', 'trackingResult')->name('submission.tracking.result');

        Route::get('/', 'index')->name('index');
        Route::get('/{service:slug}', 'show')->name('show');
        Route::get('/{service:slug}/submit', 'createSubmission')->name('submission.create');
        Route::post('/{service:slug}/submit', 'storeSubmission')->name('submission.store');
        Route::get('/{service:slug}/complete', 'completeSubmission')->name('submission.complete');
    });

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
        Route::get('/maklumat', [MaklumatController::class, 'index'])->name('maklumat.index');
    });
