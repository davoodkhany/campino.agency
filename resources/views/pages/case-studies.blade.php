@extends('layouts.app')

@section('title', 'نمونه کارها')

@section('content')
    <section class="container-shell mt-12">
        <div class="dark-surface rounded-[2.2rem] px-6 py-10 md:px-10 md:py-12">
            <x-section-title
                kicker="Case Studies"
                title="نمونه کمپین های اجرا شده با رویکرد رشد فروش"
                description="اعداد این صفحه نمونه نمایشی هستن تا ساختار خروجی و سبک گزارش کمپینو را ببینید."
            />
        </div>
    </section>

    <section class="container-shell mt-14 grid gap-6 lg:grid-cols-2">
        @foreach ([
            [
                'title' => 'برند آموزش آنلاین',
                'goal' => 'افزایش لید فروش دوره ها در 6 هفته',
                'result1' => 'رشد 2.9 برابر ثبت نام فرم مشاوره',
                'result2' => 'کاهش 36٪ هزینه هر لید',
                'result3' => 'افزایش 41٪ نرخ تبدیل صفحه فرود',
            ],
            [
                'title' => 'فروشگاه محصولات پوستی',
                'goal' => 'افزایش خرید مستقیم از کمپین های عملکردی',
                'result1' => 'رشد 2.1 برابر فروش کمپینی',
                'result2' => 'افزایش 58٪ بازگشت مشتری',
                'result3' => 'ROAS میانگین 4.3',
            ],
            [
                'title' => 'استارتاپ SaaS',
                'goal' => 'جذب دمو برای تیم فروش B2B',
                'result1' => 'افزایش 3.4 برابر درخواست دمو',
                'result2' => 'بهبود 27٪ نرخ حضور در جلسات',
                'result3' => 'کاهش چرخه فروش از 45 به 31 روز',
            ],
            [
                'title' => 'کلینیک زیبایی',
                'goal' => 'رزرو نوبت ماهانه و پر کردن ظرفیت',
                'result1' => 'رشد 1.8 برابر رزرو آنلاین',
                'result2' => 'افزایش 33٪ پاسخ واتساپ',
                'result3' => 'بهینه سازی بودجه کمپین های کم بازده',
            ],
        ] as $case)
            <article class="premium-card relative overflow-hidden rounded-[2rem] p-7">
                <div class="pointer-events-none absolute -left-12 top-0 h-28 w-28 rounded-full bg-[color:var(--purple-light)]/24 blur-2xl"></div>
                <p class="relative inline-flex rounded-full border border-[color:var(--gold)]/35 bg-[color:var(--gold-light)]/30 px-3 py-1 text-xs font-black text-[color:var(--purple-deep)]">
                    هدف: {{ $case['goal'] }}
                </p>
                <h3 class="relative mt-4 text-2xl font-black text-[color:var(--ink)]">{{ $case['title'] }}</h3>
                <ul class="relative mt-6 space-y-3 text-sm leading-8 text-[color:var(--ink)]/84">
                    <li>• {{ $case['result1'] }}</li>
                    <li>• {{ $case['result2'] }}</li>
                    <li>• {{ $case['result3'] }}</li>
                </ul>
            </article>
        @endforeach
    </section>

    <section class="container-shell mt-16">
        <x-cta
            title="می خوای نتیجه مشابه صنعت خودت رو ببینی؟"
            description="در جلسه اول، وضعیت فعلی کمپین و فرصت های رشد برندت را بررسی می کنیم و سناریوی نزدیک به واقعیت ارائه می دیم."
            primary-text="رزرو جلسه تحلیل کمپین"
            :primary-href="route('contact')"
        />
    </section>
@endsection
