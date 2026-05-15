@extends('layouts.app')

@section('title', 'تعرفه ها')

@section('content')
    <section class="container-shell mt-12">
        <div class="dark-surface rounded-[2.2rem] px-6 py-10 md:px-10 md:py-12">
            <x-section-title
                kicker="Agency Packages"
                title="پکیج های اجرایی کمپینو برای مرحله های مختلف رشد برند"
                description="تعرفه ها نقطه شروع همکاری هستن و بعد از جلسه شناخت، نسخه دقیق و شخصی سازی شده ارائه می شه."
                :center="true"
            />
        </div>
    </section>

    <section class="container-shell mt-14">
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="premium-card rounded-[2rem] p-7">
                <p class="text-xs font-black text-[color:var(--purple)]">Starter</p>
                <h3 class="mt-2 text-2xl font-black text-[color:var(--ink)]">پلن شروع</h3>
                <p class="mt-3 text-xl font-black text-[color:var(--purple-deep)]">25 میلیون / ماه</p>
                <ul class="mt-6 space-y-2.5 text-sm text-[color:var(--ink)]/80">
                    <li>• استراتژی پایه کمپین</li>
                    <li>• مدیریت 2 کانال تبلیغاتی</li>
                    <li>• داشبورد و گزارش هفتگی</li>
                    <li>• جلسه هماهنگی دو هفته یک بار</li>
                </ul>
                <a href="{{ route('campaign-request') }}" class="mt-7 inline-flex rounded-xl border border-[color:var(--purple-light)]/35 px-5 py-2.5 text-sm font-black text-[color:var(--purple-deep)] transition hover:bg-[color:var(--purple-light)]/12">
                    انتخاب این پلن
                </a>
            </article>

            <article class="dark-surface relative rounded-[2rem] p-7 ring-1 ring-[color:var(--gold)]/35">
                <span class="absolute left-6 top-6 rounded-full bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-3 py-1 text-xs font-black text-[color:var(--ink)]">
                    پیشنهاد Campino
                </span>
                <p class="text-xs font-black text-[color:var(--gold-light)]">Growth</p>
                <h3 class="mt-2 text-2xl font-black text-white">پلن رشد</h3>
                <p class="mt-3 text-xl font-black text-[color:var(--gold)]">45 میلیون / ماه</p>
                <ul class="mt-6 space-y-2.5 text-sm text-[color:var(--gold-light)]/92">
                    <li>• طراحی کامل فانل فروش</li>
                    <li>• مدیریت 4 کانال تبلیغاتی</li>
                    <li>• بهینه سازی روزانه + ریتارگتینگ</li>
                    <li>• اتصال CRM و گزارش فروش</li>
                    <li>• جلسه استراتژی هفتگی</li>
                </ul>
                <a href="{{ route('campaign-request') }}" class="mt-7 inline-flex rounded-xl bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-5 py-2.5 text-sm font-black text-[color:var(--ink)] shadow-lg shadow-[color:var(--gold)]/35 transition hover:scale-[1.03]">
                    شروع با پلن رشد
                </a>
            </article>

            <article class="premium-card rounded-[2rem] p-7">
                <p class="text-xs font-black text-[color:var(--purple)]">Scale</p>
                <h3 class="mt-2 text-2xl font-black text-[color:var(--ink)]">پلن مقیاس</h3>
                <p class="mt-3 text-xl font-black text-[color:var(--purple-deep)]">اختصاصی</p>
                <ul class="mt-6 space-y-2.5 text-sm text-[color:var(--ink)]/80">
                    <li>• تیم اختصاصی چندتخصصی</li>
                    <li>• کمپین چندبرندی / چندبازاری</li>
                    <li>• تحلیل پیشرفته درآمد و LTV</li>
                    <li>• SLA اجرایی سفارشی</li>
                </ul>
                <a href="{{ route('contact') }}" class="mt-7 inline-flex rounded-xl border border-[color:var(--purple-light)]/35 px-5 py-2.5 text-sm font-black text-[color:var(--purple-deep)] transition hover:bg-[color:var(--purple-light)]/12">
                    دریافت پیشنهاد اختصاصی
                </a>
            </article>
        </div>
    </section>

    <section class="container-shell mt-16">
        <x-cta
            title="برای انتخاب پلن، جلسه کوتاه بررسی می خوای؟"
            description="براساس هدف فروش، بودجه و وضعیت فعلی تیم، بهترین مسیر همکاری رو با هم می بندیم."
            primary-text="درخواست جلسه انتخاب پلن"
            :primary-href="route('contact')"
            secondary-text="ثبت مستقیم درخواست کمپین"
            :secondary-href="route('campaign-request')"
        />
    </section>
@endsection
