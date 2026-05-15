<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'brand_name' => ['required', 'string', 'max:120'],
            'full_name' => ['required', 'string', 'max:80'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'business_type' => ['required', 'string', 'max:120'],
            'product_name' => ['required', 'string', 'max:120'],
            'product_price' => ['required', 'string', 'max:80'],
            'campaign_goal' => ['required', 'string', 'max:200'],
            'estimated_budget' => ['required', 'string', 'max:80'],
            'campaign_duration' => ['required', 'string', 'max:80'],
            'current_channels' => ['nullable', 'string', 'max:1000'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'description' => ['required', 'string', 'max:2000'],
        ];
    }

    public function attributes(): array
    {
        return [
            'brand_name' => 'نام برند',
            'full_name' => 'نام و نام خانوادگی',
            'phone' => 'شماره تماس',
            'email' => 'ایمیل',
            'business_type' => 'نوع کسب و کار',
            'product_name' => 'نام محصول یا خدمت',
            'product_price' => 'بازه قیمت محصول',
            'campaign_goal' => 'هدف کمپین',
            'estimated_budget' => 'بودجه تخمینی',
            'campaign_duration' => 'مدت زمان کمپین',
            'current_channels' => 'کانال های فعلی تبلیغات',
            'website_url' => 'آدرس وب سایت',
            'description' => 'توضیحات',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'فیلد :attribute الزامی است.',
            'email' => ':attribute معتبر نیست.',
            'url' => ':attribute معتبر نیست.',
            'max' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        ];
    }
}
