@extends('layouts.app')

@section('title', 'طراحی فانل')

@section('content')
    <section class="container-shell mt-12">
        <div class="dark-surface rounded-[2.2rem] px-6 py-10 md:px-10 md:py-12">
            <x-section-title
                kicker="Funnel Engineering"
                title="طراحی فانل فروش Campino برای تبدیل کلیک به قرارداد"
                description="فانل ما فقط نمودار نیست؛ یک سیستم اجرایی متصل به تبلیغات، CRM، فروش و گزارش درآمده."
            />
        </div>
    </section>

    <section class="container-shell mt-14 grid gap-6 lg:grid-cols-[1.05fr_.95fr]">
        <div class="premium-card rounded-[2rem] p-7">
            <h3 class="text-2xl font-black text-[color:var(--ink)]">نقشه فانل اختصاصی برند شما</h3>
            <p class="mt-4 text-sm leading-8 text-[color:var(--ink)]/80">
                برای هر کمپین، مسیر تبدیل با توجه به نوع مشتری، زمان تصمیم گیری و ظرفیت تیم فروش طراحی می شه.
            </p>

            <div class="mt-8 space-y-3">
                @foreach ([
                    'تبلیغ هدفمند بر اساس پرسونا',
                    'لندینگ با پیشنهاد مشخص و فرم کوتاه',
                    'امتیازدهی لید و انتقال به CRM',
                    'فالوآپ مرحله ای توسط تیم فروش',
                    'ریتارگتینگ لیدهای نیمه گرم',
                    'گزارش هفتگی فروش و بهینه سازی',
                ] as $item)
                    <div class="flex items-center justify-between rounded-2xl border border-[color:var(--purple-light)]/20 bg-white/70 px-4 py-3 text-sm text-[color:var(--ink)]">
                        <span>{{ $item }}</span>
                        <span class="h-2 w-2 rounded-full bg-[color:var(--gold)]"></span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="dark-surface rounded-[2rem] p-7">
            <h3 class="text-xl font-black text-white">چرا فانل اهمیت داره؟</h3>
            <div class="mt-6 grid gap-3">
                @foreach ([
                    ['label' => 'کاهش هدررفت بودجه تبلیغات', 'value' => '-34%'],
                    ['label' => 'افزایش نرخ تبدیل لید به خرید', 'value' => '+2.8x'],
                    ['label' => 'کاهش زمان پاسخ تیم فروش', 'value' => '-41%'],
                ] as $item)
                    <div class="premium-glass rounded-2xl p-4">
                        <p class="text-xs text-[color:var(--gold-light)]/80">{{ $item['label'] }}</p>
                        <p class="mt-2 text-2xl font-black text-white">{{ $item['value'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-shell mt-16">
        <x-cta
            title="اگر حس می کنی لید میاد ولی فروش قفل نمی شه"
            description="طراحی فانل فروش می تونه مهم ترین اهرم رشد برندت باشه. شروعش با یک جلسه تحلیل رایگانه."
            primary-text="درخواست طراحی فانل"
            :primary-href="route('campaign-request')"
            secondary-text="تماس با تیم کمپینو"
            :secondary-href="route('contact')"
        />
    </section>
@endsection
