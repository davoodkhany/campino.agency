@extends('layouts.main')

@section('title', 'خدمات')

@section('content')
    <section class="mx-auto mt-12 w-[min(95%,72rem)]">
        <x-section-title
            kicker="خدمات کمپینو"
            title="خدماتی که مستقیم به رشد لید و فروش وصل می شن"
            description="هر خدمت با KPI مشخص، برنامه اجرا و گزارش قابل استفاده برای تیم شما ارائه می شه."
        />

        <div class="mt-8 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            <x-card title="طراحی استراتژی کمپین" icon="S1" description="هدف گذاری، انتخاب بازار هدف و تدوین مسیر اجرای 3 ماهه." />
            <x-card title="تحقیق بازار و رقبا" icon="S2" description="تحلیل پیام، پیشنهاد ارزش و نقاط ضعف کمپین های رقیب." />
            <x-card title="تولید پیام و کانسپت" icon="S3" description="طراحی پیام های تبلیغاتی برای هر مرحله از قیف بازاریابی." />
            <x-card title="مدیریت تبلیغات عملکردی" icon="S4" description="بهینه سازی روزانه کمپین های کلیکی برای کاهش CAC و افزایش ROI." />
            <x-card title="تحلیل داده و داشبورد" icon="S5" description="گزارش های ساده و دقیق برای تصمیم گیری سریع تیم مارکتینگ." />
            <x-card title="مشاوره تیم داخلی" icon="S6" description="جلسات هفتگی برای هم راستا کردن تیم فروش، محتوا و تبلیغات." />
        </div>
    </section>

    <section class="mx-auto mt-14 w-[min(95%,72rem)] rounded-3xl border border-white/10 bg-slate-900/70 p-6 md:p-8">
        <x-section-title
            title="فرآیند همکاری"
            description="همکاری با کمپینو مرحله به مرحله و شفاف پیش می ره."
        />

        <div class="mt-8 grid gap-4 md:grid-cols-4">
            @foreach ([
                ['n' => '1', 't' => 'شناخت کسب و کار'],
                ['n' => '2', 't' => 'طراحی پلن اجرایی'],
                ['n' => '3', 't' => 'اجرا و بهینه سازی'],
                ['n' => '4', 't' => 'گزارش و توسعه'],
            ] as $step)
                <div class="rounded-2xl border border-white/10 bg-slate-950/60 p-4">
                    <p class="text-xl font-extrabold text-orange-300">{{ $step['n'] }}</p>
                    <p class="mt-2 text-sm text-slate-300">{{ $step['t'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mx-auto mt-14 w-[min(95%,72rem)]">
        <x-cta
            title="مناسب برند شما کدوم سرویسه؟"
            description="یک تماس کوتاه بگیریم تا بر اساس وضعیت فعلی تون، ترکیب خدمات مناسب رو پیشنهاد بدیم."
            primary-text="درخواست مشاوره"
            :primary-href="route('contact')"
        />
    </section>
@endsection
