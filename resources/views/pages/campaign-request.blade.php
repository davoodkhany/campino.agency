@extends('layouts.app')

@section('title', 'درخواست کمپین')

@section('content')
    <section class="container-shell mt-12 grid gap-7 lg:grid-cols-[.9fr_1.1fr]">
        <aside class="space-y-6">
            <div class="dark-surface rounded-[2rem] p-7">
                <x-section-title
                    kicker="Campaign Request"
                    title="شروع همکاری با Campino"
                    description="این فرم فقط برای شناخت اولیه است. بعد از ثبت، تیم ما با یک پیشنهاد اجرایی تماس می گیرد."
                />
            </div>

            <div class="premium-card rounded-[2rem] p-6">
                <h3 class="text-lg font-black text-[color:var(--ink)]">بعد از ثبت فرم چه اتفاقی می افته؟</h3>
                <ul class="mt-4 space-y-3 text-sm leading-7 text-[color:var(--ink)]/82">
                    <li>• طی ۲۴ ساعت کاری با شما تماس می گیریم.</li>
                    <li>• جلسه کشف نیاز برند برگزار می شه.</li>
                    <li>• پلن اولیه کمپین + بازه بودجه ارائه می دیم.</li>
                    <li>• در صورت تایید، فاز اجرا شروع می شه.</li>
                </ul>
            </div>
        </aside>

        <form action="{{ route('campaign-request.submit') }}" method="POST" class="dark-surface rounded-[2rem] p-6 md:p-8">
            @csrf

            <h3 class="text-2xl font-black text-white">فرم درخواست طراحی کمپین</h3>
            <p class="mt-3 text-sm text-[color:var(--gold-light)]/88">برای دریافت پیشنهاد دقیق، اطلاعات زیر را کامل کنید.</p>

            <div class="mt-7 grid gap-4 md:grid-cols-2">
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
                    placeholder="وضعیت فعلی تبلیغات، چالش اصلی و هدف فروش را توضیح دهید..."
                    :required="true"
                />
            </div>

            <div class="mt-7 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-xs text-[color:var(--gold-light)]/75">اطلاعات شما محرمانه می مونه و فقط برای هماهنگی همکاری استفاده می شه.</p>
                <x-forms.submit text="ارسال درخواست کمپین" />
            </div>
        </form>
    </section>
@endsection
