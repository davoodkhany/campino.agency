@extends('layouts.app')

@section('title', 'پلتفرم های تبلیغاتی')

@section('content')
    <section class="container-shell mt-12">
        <div class="dark-surface rounded-[2.2rem] px-6 py-10 md:px-10 md:py-12">
            <x-section-title
                kicker="Media & Platforms"
                title="ترکیب هوشمند پلتفرم ها برای رشد سریع تر فروش"
                description="ما پلتفرم را بر اساس مدل فروش برند انتخاب می کنیم؛ نه بر اساس ترندهای لحظه ای."
            />
        </div>
    </section>

    <section class="container-shell mt-14">
        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-card title="Google Ads" icon="G" description="جذب مخاطب با نیت خرید بالا از جست وجو و شبکه نمایش." />
            <x-card title="Instagram / Meta" icon="M" description="ساخت آگاهی، لیدگیری و ریتارگتینگ چندمرحله ای برای B2C." />
            <x-card title="LinkedIn Ads" icon="L" description="بهترین گزینه برای کمپین های B2B و جذب تصمیم گیرنده ها." />
            <x-card title="Telegram & Influencer" icon="T" description="افزایش سهم صدا و پوشش سریع در کمپین های لانچ یا فروش ویژه." />
            <x-card title="Email & CRM Automation" icon="E" description="پرورش لیدهای سرد و گرم با سناریوی اتوماتیک و قابل اندازه گیری." />
            <x-card title="Retargeting Stack" icon="R" description="بازگرداندن مخاطبانی که در مسیر خرید رها شدن و افزایش ROAS." />
        </div>
    </section>

    <section class="container-shell mt-16">
        <div class="premium-card rounded-[2rem] p-7 md:p-10">
            <x-section-title
                kicker="Selection Logic"
                title="چطور سبد پلتفرم شما انتخاب می شه؟"
                description="هر تصمیم رسانه ای براساس داده، ظرفیت و واقعیت فروش شماست."
            />

            <div class="mt-8 grid gap-4 md:grid-cols-3">
                <div class="rounded-2xl border border-[color:var(--purple-light)]/25 bg-[color:var(--purple-light)]/10 p-5">
                    <h3 class="text-base font-black text-[color:var(--ink)]">هدف کمپین</h3>
                    <p class="mt-3 text-sm leading-7 text-[color:var(--ink)]/80">لید، فروش مستقیم، لانچ محصول یا بازگشت مشتری</p>
                </div>
                <div class="rounded-2xl border border-[color:var(--purple-light)]/25 bg-[color:var(--purple-light)]/10 p-5">
                    <h3 class="text-base font-black text-[color:var(--ink)]">رفتار مخاطب</h3>
                    <p class="mt-3 text-sm leading-7 text-[color:var(--ink)]/80">محل حضور، زمان تصمیم گیری و حساسیت به پیشنهاد</p>
                </div>
                <div class="rounded-2xl border border-[color:var(--purple-light)]/25 bg-[color:var(--purple-light)]/10 p-5">
                    <h3 class="text-base font-black text-[color:var(--ink)]">ظرفیت تیم فروش</h3>
                    <p class="mt-3 text-sm leading-7 text-[color:var(--ink)]/80">سرعت پاسخ، کیفیت پیگیری و امکان مقیاس پذیری</p>
                </div>
            </div>
        </div>
    </section>
@endsection
