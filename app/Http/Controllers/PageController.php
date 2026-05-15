<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

    public function submitCampaignRequest(Request $request): RedirectResponse
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:80'],
            'company' => ['nullable', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:20'],
            'budget' => ['nullable', 'string', 'max:50'],
            'goal' => ['required', 'string', 'max:200'],
            'description' => ['required', 'string', 'max:1000'],
        ]);

        return back()->with('success', 'درخواست شما ثبت شد. تیم کمپینو خیلی زود با شما تماس می گیرد.');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:80'],
            'phone' => ['nullable', 'string', 'max:20', 'required_without:email'],
            'email' => ['nullable', 'email', 'max:255', 'required_without:phone'],
            'subject' => ['required', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:1000'],
        ]);

        return back()->with('success', 'پیام شما با موفقیت ارسال شد.');
    }
}
