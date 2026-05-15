<?php

use App\Http\Controllers\PublicPageController;
use Illuminate\Support\Facades\Route;

Route::controller(PublicPageController::class)->group(function (): void {
    Route::get('/', 'home')->name('home');
    Route::get('/services', 'services')->name('services');
    Route::get('/funnel-design', 'funnelDesign')->name('funnel-design');
    Route::get('/advertising-platforms', 'advertisingPlatforms')->name('advertising-platforms');
    Route::get('/case-studies', 'caseStudies')->name('case-studies');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/blog', 'blog')->name('blog');

    Route::get('/campaign-request', 'campaignRequest')->name('campaign-request');
    Route::post('/campaign-request', 'submitCampaignRequest')->name('campaign-request.submit');

    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'submitContact')->name('contact.submit');
});
