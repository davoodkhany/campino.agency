<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampaignRequestRequest;
use App\Models\CampaignRequest;
use Illuminate\Http\RedirectResponse;

class CampaignRequestController extends Controller
{
    public function store(StoreCampaignRequestRequest $request): RedirectResponse
    {
        CampaignRequest::query()->create([
            ...$request->validated(),
            'status' => 'new',
        ]);

        return back()->with('success', 'درخواست کمپین شما ثبت شد. تیم کمپینو خیلی زود با شما تماس می گیرد.');
    }
}
