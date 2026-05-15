<?php

use App\Http\Controllers\CampaignRequestController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/services', 'services')->name('services');
    Route::get('/funnel-design', 'funnelDesign')->name('funnel-design');
    Route::get('/advertising-platforms', 'advertisingPlatforms')->name('advertising-platforms');
    Route::get('/case-studies', 'caseStudies')->name('case-studies');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/campaign-request', 'campaignRequest')->name('campaign-request');
    Route::get('/contact', 'contact')->name('contact');
});

Route::post('/campaign-request', [CampaignRequestController::class, 'store'])->name('campaign-request.submit');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.submit');
