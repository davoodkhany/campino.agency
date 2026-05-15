@extends('layouts.main')

@section('title', 'پلتفرم های تبلیغاتی')

@section('content')
    <section class="mx-auto mt-12 w-[min(95%,72rem)]">
        <x-section-title
            kicker="Media Buying"
            title="انتخاب پلتفرم درست برای هر هدف کمپین"
            description="بودجه تبلیغاتی شما روی کانال هایی خرج می شه که برای مدل کسب و کار شما بازده واقعی داشته باشن."
        />

        <div class="mt-8 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            <x-card title="گوگل ادز" icon="P1" description="کمپین جست و جو و دیسپلی برای جذب لیدهای آماده خرید." />
            <x-card title="اینستاگرام و متا" icon="P2" description="کمپین آگاهی، لید و ریتارگتینگ با تقسیم بندی دقیق مخاطب." />
            <x-card title="لینکدین" icon="P3" description="مناسب برندهای B2B برای جذب تصمیم گیرنده ها." />
            <x-card title="تلگرام و شبکه های محتوایی" icon="P4" description="برای پوشش سریع و تقویت پیام برند در مقیاس بالا." />
            <x-card title="ایمیل و اتوماسیون" icon="P5" description="پرورش لیدها با سناریوهای مرحله ای و قابل شخصی سازی." />
            <x-card title="ریتارگتینگ چندکاناله" icon="P6" description="بازگرداندن مخاطبان نیمه مسیر برای افزایش نرخ نهایی تبدیل." />
        </div>
    </section>

    <section class="mx-auto mt-14 w-[min(95%,72rem)] rounded-3xl border border-white/10 bg-slate-900/70 p-6 md:p-8">
        <x-section-title
            title="چطور پلتفرم ها رو انتخاب می کنیم؟"
            description="تصمیم گیری ما بر اساس داده کسب و کار شماست، نه حدس."
        />

        <div class="mt-6 grid gap-3 text-sm text-slate-300 md:grid-cols-3">
            <div class="rounded-2xl border border-white/10 bg-slate-950/60 p-4">هدف اصلی: لید، فروش، آگاهی برند یا بازگشت مشتری</div>
            <div class="rounded-2xl border border-white/10 bg-slate-950/60 p-4">پرسونا: محل حضور، مدل تصمیم گیری و حساسیت قیمتی مخاطب</div>
            <div class="rounded-2xl border border-white/10 bg-slate-950/60 p-4">محدودیت ها: زمان، بودجه، ظرفیت تیم فروش و زیرساخت فعلی</div>
        </div>
    </section>
@endsection
