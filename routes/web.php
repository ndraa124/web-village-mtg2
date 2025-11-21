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
use App\Http\Controllers\AntiCorruptController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact/send', [HomeController::class, 'sendContactEmail'])->name('contact.send');

Route::prefix('/profile')
    ->name('profile.')
    ->group(function () {
        Route::get('/history', [HistoryController::class, 'index'])->name('history');
        Route::get('/vision-mission', [VisionMissionController::class, 'index'])->name('vision');
        Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');
    });

Route::prefix('/infographics')
    ->name('infographics.')
    ->group(function () {
        Route::get('/resident', [InfographicsController::class, 'resident'])->name('resident');
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
    ->controller(AntiCorruptController::class)
    ->name('anti.')
    ->group(function () {
        Route::get('/governance', 'governance')->name('governance');
        Route::get('/supervision', 'supervision')->name('supervision');
        Route::get('/service-quality', 'serviceQuality')->name('service-quality');
        Route::get('/participate', 'participate')->name('participate');
        Route::get('/local-wisdom', 'localWisdom')->name('local-wisdom');
        Route::get('/maklumat', 'maklumat')->name('maklumat');
    });
