@extends('layouts.app')

@section('title', 'درخواست کمپین')

@section('content')
    <section class="mx-auto mt-12 grid w-[min(95%,72rem)] gap-8 lg:grid-cols-[.9fr_1.1fr]">
        <div>
            <x-section-title
                kicker="Campaign Request"
                title="شروع همکاری با کمپینو"
                description="این فرم برای بررسی اولیه نیاز شماست. بعد از ثبت، تیم فروش برای جلسه شناخت تماس می گیره."
            />

            <div class="mt-6 rounded-2xl border border-white/10 bg-slate-900/70 p-5">
                <h3 class="text-base font-bold text-white">چه اطلاعاتی بهتره آماده باشه؟</h3>
                <ul class="mt-4 space-y-2 text-sm text-slate-300">
                    <li>• هدف اصلی از کمپین: لید، فروش یا آگاهی برند</li>
                    <li>• بودجه تقریبی ماهانه</li>
                    <li>• کانال های فعلی تبلیغات</li>
                    <li>• چالش اصلی تیم مارکتینگ یا فروش</li>
                </ul>
            </div>
        </div>

        <form action="{{ route('campaign-request.submit') }}" method="POST" class="rounded-3xl border border-white/10 bg-slate-900/70 p-6 md:p-8">
            @csrf

            <div class="grid gap-4 md:grid-cols-2">
                <x-forms.input name="brand_name" label="نام برند" placeholder="مثال: کمپینو" :required="true" />
                <x-forms.input name="full_name" label="نام و نام خانوادگی" placeholder="مثال: علی محمدی" :required="true" />
                <x-forms.input name="phone" label="شماره تماس" placeholder="مثال: 09121234567" :required="true" />
                <x-forms.input name="email" type="email" label="ایمیل" placeholder="مثال: brand@example.com" />
                <x-forms.input name="business_type" label="نوع کسب و کار" placeholder="مثال: فروشگاه آنلاین" :required="true" />
                <x-forms.select
                    name="campaign_goal"
                    label="هدف کمپین"
                    :required="true"
                    :options="[
                        '' => 'انتخاب کنید',
                        'lead_generation' => 'افزایش لید',
                        'sales' => 'افزایش فروش',
                        'brand_awareness' => 'آگاهی از برند',
                    ]"
                />
                <x-forms.select
                    name="estimated_budget"
                    label="بودجه تقریبی ماهانه"
                    :required="true"
                    :options="[
                        '' => 'انتخاب کنید',
                        'under_30' => 'کمتر از 30 میلیون تومان',
                        '30_80' => '30 تا 80 میلیون تومان',
                        '80_150' => '80 تا 150 میلیون تومان',
                        'over_150' => 'بیشتر از 150 میلیون تومان',
                    ]"
                />
            </div>

            <div class="mt-4">
                <x-forms.textarea
                    name="description"
                    label="توضیحات تکمیلی"
                    placeholder="کمی درباره وضعیت فعلی تبلیغات و هدف کمپین بنویسید..."
                    :required="true"
                />
            </div>

            <div class="mt-6 flex items-center justify-between gap-3">
                <p class="text-xs text-slate-400">با ثبت فرم، تیم کمپینو برای هماهنگی جلسه با شما تماس می گیرد.</p>
                <x-forms.submit text="ارسال درخواست" />
            </div>
        </form>
    </section>
@endsection
