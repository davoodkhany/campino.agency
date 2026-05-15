@extends('layouts.main')

@section('title', 'خانه')

@section('content')
    <section class="mx-auto mt-10 grid w-[min(95%,72rem)] gap-8 lg:grid-cols-[1.15fr_.85fr] lg:items-center">
        <div>
            <p class="inline-flex rounded-full border border-emerald-300/30 bg-emerald-400/10 px-4 py-1 text-xs font-bold text-emerald-200">
                کمپین 360 درجه برای رشد واقعی
            </p>
            <h1 class="mt-5 text-3xl font-extrabold leading-tight text-white md:text-5xl">
                کمپین تبلیغاتی حرفه ای برای برندهایی که دنبال لید و فروش پایدارن
            </h1>
            <p class="mt-5 max-w-xl text-sm leading-8 text-slate-300 md:text-base">
                کمپینو کنار تیم شماست تا از استراتژی تا اجرا، همه مسیر جذب مخاطب و تبدیل رو یکپارچه جلو ببریم.
                خروجی ما فقط گزارش نیست؛ رشد قابل اندازه گیریه.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('campaign-request') }}" class="rounded-xl bg-orange-400 px-5 py-3 text-sm font-bold text-slate-950 transition hover:bg-orange-300">
                    ثبت درخواست کمپین
                </a>
                <a href="{{ route('services') }}" class="rounded-xl border border-white/20 px-5 py-3 text-sm font-bold text-white transition hover:bg-white/10">
                    مشاهده خدمات
                </a>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            @foreach ([
                ['title' => '12+', 'desc' => 'برند فعال در همکاری جاری'],
                ['title' => '3.8x', 'desc' => 'میانگین رشد نرخ تبدیل'],
                ['title' => '24/7', 'desc' => 'پایش و بهینه سازی کمپین'],
                ['title' => '90 روز', 'desc' => 'میانگین زمان رسیدن به نتایج'],
            ] as $item)
                <div class="rounded-2xl border border-white/10 bg-slate-900/70 p-5">
                    <p class="text-2xl font-extrabold text-orange-300">{{ $item['title'] }}</p>
                    <p class="mt-2 text-sm text-slate-300">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mx-auto mt-16 w-[min(95%,72rem)]">
        <x-section-title
            kicker="خدمات کلیدی"
            title="از طراحی فانل تا اجرای کمپین، یک تیم یکپارچه کنار شما"
            description="برای هر مرحله از رشد برند، سرویس مشخص و خروجی قابل سنجش می گیرید."
        />

        <div class="mt-8 grid gap-4 md:grid-cols-3">
            <x-card title="استراتژی و پلن کمپین" icon="01" description="تحلیل بازار، شناخت پرسونا و طراحی نقشه جذب لید برای 90 روز آینده." link-text="جزئیات" :link-href="route('services')" />
            <x-card title="طراحی فانل فروش" icon="02" description="ساخت مسیر دقیق کاربر از اولین تماس تا خرید با تمرکز روی نرخ تبدیل." link-text="جزئیات" :link-href="route('funnel-design')" />
            <x-card title="مدیریت رسانه و تبلیغات" icon="03" description="اجرا و بهینه سازی تبلیغات در پلتفرم های مناسب با گزارش هفتگی شفاف." link-text="جزئیات" :link-href="route('advertising-platforms')" />
        </div>
    </section>

    <section class="mx-auto mt-16 w-[min(95%,72rem)]">
        <x-cta
            title="برای برندت یک نقشه رشد عملی می خوای؟"
            description="در جلسه کوتاه شناخت، وضعیت فعلی تون رو بررسی می کنیم و پیشنهاد اجرایی اولیه می دیم."
            primary-text="رزرو جلسه مشاوره"
            :primary-href="route('contact')"
            secondary-text="دیدن تعرفه ها"
            :secondary-href="route('pricing')"
        />
    </section>
@endsection
