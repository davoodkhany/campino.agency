<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicPageController extends Controller
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

    public function submitCampaignRequest(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'brand_name' => ['required', 'string', 'max:120'],
                'full_name' => ['required', 'string', 'max:120'],
                'phone' => ['required', 'string', 'max:20'],
                'email' => ['nullable', 'email', 'max:255'],
                'business_type' => ['required', 'string', 'max:120'],
                'campaign_goal' => ['required', 'string', 'max:200'],
                'estimated_budget' => ['required', 'string', 'max:120'],
                'description' => ['required', 'string', 'max:2000'],
            ],
            [],
            [
                'brand_name' => 'نام برند',
                'full_name' => 'نام و نام خانوادگی',
                'phone' => 'شماره تماس',
                'email' => 'ایمیل',
                'business_type' => 'نوع کسب‌وکار',
                'campaign_goal' => 'هدف کمپین',
                'estimated_budget' => 'بودجه تقریبی',
                'description' => 'توضیحات',
            ],
        );

        return back()->with('success', 'درخواست شما دریافت شد. تیم کمپینو خیلی زود با شما تماس می‌گیرد.');
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'full_name' => ['required', 'string', 'max:120'],
                'phone' => ['nullable', 'string', 'max:20', 'required_without:email'],
                'email' => ['nullable', 'email', 'max:255', 'required_without:phone'],
                'subject' => ['required', 'string', 'max:120'],
                'message' => ['required', 'string', 'max:2000'],
            ],
            [],
            [
                'full_name' => 'نام و نام خانوادگی',
                'phone' => 'شماره تماس',
                'email' => 'ایمیل',
                'subject' => 'موضوع',
                'message' => 'متن پیام',
            ],
        );

        return back()->with('success', 'پیام شما ثبت شد. در اولین فرصت پاسخ می‌دهیم.');
    }
}
