@extends('layouts.app')

@section('title', 'خدمات')

@section('content')
    <section class="container-shell mt-12">
        <div class="dark-surface rounded-[2.2rem] px-6 py-10 md:px-10 md:py-12">
            <x-section-title
                kicker="Campino Services"
                title="خدمات ۳۶۰ درجه برای ساخت مسیر فروش، نه فقط اجرای تبلیغ"
                description="خدمات ما به صورت یکپارچه طراحی شده تا از اولین تماس مخاطب تا فروش نهایی، یک سیستم رشد قابل تکرار داشته باشید."
            />
        </div>
    </section>

    <section class="container-shell mt-14">
        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-card title="استراتژی کمپین و جایگاه سازی" icon="S1" description="تحلیل وضعیت فعلی برند، طراحی پیام اصلی، تعریف KPI و نقشه کمپین ۹۰ روزه." />
            <x-card title="طراحی خلاقه و پیام تبلیغ" icon="S2" description="ساخت زاویه های پیام رسانی، سناریوی تبلیغاتی و یکپارچه سازی ارتباط برند در همه کانال ها." />
            <x-card title="طراحی لندینگ و Conversion UX" icon="S3" description="پیاده سازی لندینگ با ساختار فروش محور، فرم های هوشمند و مسیر ساده تصمیم گیری کاربر." />
            <x-card title="مدیریت رسانه و Media Buying" icon="S4" description="انتخاب پلتفرم، اجرای کمپین، بودجه بندی پویا و بهینه سازی روزانه بر اساس داده واقعی." />
            <x-card title="CRM و پرورش لید" icon="S5" description="طبقه بندی لیدها، سناریوی Follow-up و اتصال کامل مارکتینگ به تیم فروش." />
            <x-card title="گزارش مدیریتی و تحلیل درآمد" icon="S6" description="داشبورد شفاف، تحلیل قیف فروش و تصمیم سازی سریع برای توسعه کمپین." />
        </div>
    </section>

    <section class="container-shell mt-16">
        <div class="premium-card rounded-[2rem] p-7 md:p-10">
            <x-section-title
                kicker="Workflow"
                title="فرآیند همکاری شفاف و اجرایی"
                description="در هر مرحله خروجی دقیق و زمان بندی مشخص دریافت می کنید."
            />

            <div class="mt-8 grid gap-4 md:grid-cols-4">
                @foreach ([
                    ['step' => '01', 'title' => 'جلسه کشف و تحلیل', 'desc' => 'شناخت بازار، محصول و اهداف فروش'],
                    ['step' => '02', 'title' => 'طراحی پلن کمپین', 'desc' => 'استراتژی، رسانه، لندینگ و KPI'],
                    ['step' => '03', 'title' => 'اجرا و بهینه سازی', 'desc' => 'مدیریت روزانه عملکرد کمپین'],
                    ['step' => '04', 'title' => 'مقیاس و توسعه', 'desc' => 'افزایش بودجه روی کانال های سودده'],
                ] as $item)
                    <div class="rounded-2xl border border-[color:var(--purple-light)]/20 bg-[color:var(--purple-light)]/10 p-5">
                        <p class="text-sm font-black text-[color:var(--purple)]">{{ $item['step'] }}</p>
                        <h3 class="mt-2 text-base font-black text-[color:var(--ink)]">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-[color:var(--ink)]/80">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-shell mt-16">
        <x-cta
            title="برای برند شما کدوم ترکیب خدمات بهتر جواب می ده؟"
            description="یک جلسه کوتاه بگذاریم تا بر اساس بودجه، تیم و هدف فروش، نسخه مناسب خدمات را پیشنهاد بدیم."
            primary-text="درخواست مشاوره تخصصی"
            :primary-href="route('contact')"
            secondary-text="شروع درخواست کمپین"
            :secondary-href="route('campaign-request')"
        />
    </section>
@endsection
