<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function funnelDesign(): View
    {
        return view('pages.funnel-design');
    }

    public function advertisingPlatforms(): View
    {
        return view('pages.advertising-platforms');
    }

    public function caseStudies(): View
    {
        return view('pages.case-studies');
    }

    public function pricing(): View
    {
        return view('pages.pricing');
    }

    public function blog(): View
    {
        return view('pages.blog');
    }

    public function campaignRequest(): View
    {
        return view('pages.campaign-request');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
