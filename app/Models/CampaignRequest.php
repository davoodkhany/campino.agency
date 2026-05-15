<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignRequest extends Model
{
    protected $fillable = [
        'brand_name',
        'full_name',
        'phone',
        'email',
        'business_type',
        'product_name',
        'product_price',
        'campaign_goal',
        'estimated_budget',
        'campaign_duration',
        'current_channels',
        'website_url',
        'description',
        'status',
    ];
}
