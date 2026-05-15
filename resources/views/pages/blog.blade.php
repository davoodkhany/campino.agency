@extends('layouts.app')

@section('title', 'بلاگ')

@section('content')
    <section class="container-shell mt-12">
        <div class="dark-surface rounded-[2.2rem] px-6 py-10 md:px-10 md:py-12">
            <x-section-title
                kicker="Insights"
                title="بلاگ Campino؛ استراتژی، تبلیغات و رشد فروش"
                description="این بخش فعلا نمایشی است و در فاز بعدی به سیستم مدیریت محتوا متصل می شود."
            />
        </div>
    </section>

    <section class="container-shell mt-14">
        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            @foreach ([
                ['tag' => 'Performance', 'title' => 'چطور CAC رو بدون افت کیفیت لید کم کنیم؟', 'desc' => '۵ اقدام فوری برای کاهش هزینه جذب مشتری در کمپین های عملکردی.'],
                ['tag' => 'Landing', 'title' => 'اشتباه های رایج در طراحی صفحه فرود', 'desc' => 'چرا بعضی لندینگ ها با وجود ترافیک خوب خروجی فروش ندارن.'],
                ['tag' => 'Media', 'title' => 'راهنمای انتخاب پلتفرم تبلیغاتی', 'desc' => 'برای هر هدف کمپین، کدوم کانال بازده بهتری می ده؟'],
                ['tag' => 'Retention', 'title' => 'ریتارگتینگ موثر برای فروشگاه ها', 'desc' => 'چطور مخاطب مردد را دوباره وارد مسیر خرید کنیم.'],
                ['tag' => 'Sales', 'title' => 'نقش تیم فروش در موفقیت کمپین', 'desc' => 'هماهنگی مارکتینگ و فروش چه تاثیری روی ROI داره.'],
                ['tag' => 'Checklist', 'title' => 'چک لیست شروع کمپین ۹۰ روزه', 'desc' => 'قبل از لانچ کمپین، این ۱۰ مورد باید آماده باشه.'],
            ] as $post)
                <article class="premium-card group rounded-[1.8rem] p-6 transition hover:-translate-y-1">
                    <span class="inline-flex rounded-full border border-[color:var(--purple-light)]/35 bg-[color:var(--purple-light)]/12 px-3 py-1 text-xs font-black text-[color:var(--purple-deep)]">
                        {{ $post['tag'] }}
                    </span>
                    <h3 class="mt-4 text-xl font-black leading-8 text-[color:var(--ink)]">{{ $post['title'] }}</h3>
                    <p class="mt-4 text-sm leading-8 text-[color:var(--ink)]/80">{{ $post['desc'] }}</p>
                    <a href="{{ route('blog') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-black text-[color:var(--purple)] transition group-hover:text-[color:var(--purple-deep)]">
                        ادامه مقاله
                        <span class="text-xs">&lt;</span>
                    </a>
                </article>
            @endforeach
        </div>
    </section>
@endsection
