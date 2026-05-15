@extends('layouts.app')

@section('title', 'خانه')

@section('content')
    <section class="container-shell mt-10">
        <div class="dark-surface relative overflow-hidden rounded-[2.4rem] px-6 py-10 md:px-10 md:py-14">
            <div class="pointer-events-none absolute -left-20 top-8 h-52 w-52 rounded-full bg-[color:var(--gold)]/22 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-16 bottom-4 h-64 w-64 rounded-full bg-[color:var(--purple-light)]/36 blur-3xl"></div>

            <div class="relative grid items-center gap-10 lg:grid-cols-[1.15fr_.85fr]">
                <div>
                    <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-[color:var(--gold-light)]/35 bg-white/10 px-4 py-1.5 text-xs font-extrabold text-[color:var(--gold-light)]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[color:var(--gold)]"></span>
                        360° Creative Performance Agency
                    </div>

                    <h1 class="text-3xl font-black leading-tight text-white md:text-5xl">
                        فقط تبلیغ نرو؛ مسیر فروش بساز
                    </h1>

                    <p class="mt-6 max-w-2xl text-[15px] leading-8 text-[color:var(--gold-light)]/92 md:text-base">
                        Campino برای برندها کمپین ۳۶۰ درجه طراحی و اجرا می‌کنه؛ از استراتژی، لندینگ و محتوا تا تبلیغات،
                        CRM، ریتارگتینگ و گزارش فروش.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="{{ route('campaign-request') }}" class="rounded-xl bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-6 py-3 text-sm font-black text-[color:var(--ink)] shadow-lg shadow-[color:var(--gold)]/35 transition hover:scale-[1.02]">
                            درخواست طراحی کمپین
                        </a>
                        <a href="{{ route('services') }}" class="rounded-xl border border-[color:var(--gold-light)]/45 bg-white/5 px-6 py-3 text-sm font-bold text-[color:var(--gold-light)] transition hover:bg-white/12 hover:text-white">
                            مشاهده خدمات
                        </a>
                    </div>

                    <div class="mt-9 grid gap-3 sm:grid-cols-3">
                        @foreach ([
                            ['value' => '120+', 'label' => 'کمپین اجرا شده'],
                            ['value' => '4.2x', 'label' => 'میانگین رشد فروش'],
                            ['value' => '97%', 'label' => 'رضایت همکاری'],
                        ] as $stat)
                            <div class="premium-glass rounded-2xl px-4 py-3">
                                <p class="text-xl font-black text-white">{{ $stat['value'] }}</p>
                                <p class="mt-1 text-xs text-[color:var(--gold-light)]/85">{{ $stat['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="premium-glass rounded-3xl p-6 md:p-8">
                    <p class="text-sm font-black text-white">مسیر واقعی تبدیل در کمپین های کمپینو</p>
                    <p class="mt-2 text-xs text-[color:var(--gold-light)]/80">تبلیغ → لندینگ → لید → CRM → ریتارگتینگ → فروش</p>

                    <div class="mt-7 space-y-3">
                        @foreach ([
                            'تبلیغ هدفمند در کانال درست',
                            'لندینگ سریع با پیام واضح',
                            'ثبت لید و اتصال به CRM',
                            'پیگیری هوشمند با ریتارگتینگ',
                            'تحویل لید گرم به تیم فروش',
                            'اندازه گیری و رشد فروش نهایی',
                        ] as $item)
                            <div class="flex items-center justify-between rounded-2xl border border-[color:var(--gold-light)]/18 bg-white/8 px-4 py-3 text-sm text-[color:var(--gold-light)]">
                                <span>{{ $item }}</span>
                                <span class="h-2 w-2 rounded-full bg-[color:var(--gold)]"></span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-shell mt-20">
        <x-section-title
            kicker="Services"
            title="خدمات کمپینو برای ساخت موتور رشد قابل اندازه گیری"
            description="ترکیب خدمات به صورت ماژولار طراحی می شه تا دقیقا متناسب با مرحله رشد برند شما باشه."
        />

        <div class="mt-9 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-card title="استراتژی رشد و کمپین" icon="01" description="تحلیل بازار، طراحی پیام و برنامه اجرایی ۹۰ روزه با KPI مشخص." link-text="بیشتر بخوانید" :link-href="route('services')" />
            <x-card title="فانل و لندینگ فروش" icon="02" description="ساخت مسیر تبدیل از اولین کلیک تا تحویل لید فروش محور به تیم شما." link-text="بیشتر بخوانید" :link-href="route('funnel-design')" />
            <x-card title="مدیریت تبلیغات عملکردی" icon="03" description="اجرای حرفه ای در پلتفرم های مناسب با بهینه سازی روزانه هزینه و نرخ تبدیل." link-text="بیشتر بخوانید" :link-href="route('advertising-platforms')" />
        </div>
    </section>

    <section class="container-shell mt-18">
        <div class="premium-card overflow-hidden rounded-[2rem] p-7 md:p-10">
            <x-section-title
                kicker="Funnel Process"
                title="فانل فروش Campino؛ از جذب تا بستن فروش"
                description="هر مرحله KPI خودش را دارد و خروجی هر مرحله، ورودی مرحله بعدی است."
            />

            <div class="mt-8 grid gap-4 md:grid-cols-3">
                @foreach ([
                    ['step' => 'مرحله 1', 'title' => 'جذب مخاطب با پیام دقیق', 'desc' => 'ترکیب رسانه، خلاقیت تبلیغ و مخاطب هدف'],
                    ['step' => 'مرحله 2', 'title' => 'تبدیل به لید قابل پیگیری', 'desc' => 'لندینگ، فرم، امتیازدهی لید و تحویل به CRM'],
                    ['step' => 'مرحله 3', 'title' => 'فروش نهایی و توسعه', 'desc' => 'ریتارگتینگ، Follow-up و تحلیل درآمدی کمپین'],
                ] as $step)
                    <div class="rounded-2xl border border-[color:var(--purple-light)]/25 bg-[color:var(--purple-light)]/12 p-5">
                        <p class="text-xs font-black text-[color:var(--purple)]">{{ $step['step'] }}</p>
                        <h3 class="mt-2 text-lg font-black text-[color:var(--ink)]">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-[color:var(--ink)]/80">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-shell mt-18">
        <div class="dark-surface rounded-[2rem] p-7 md:p-10">
            <x-section-title
                kicker="Platforms"
                title="پلتفرم هایی که کمپین شما را به فروش وصل می کنن"
                description="انتخاب کانال ها بر اساس داده برند، نوع مخاطب و ظرفیت تیم فروش انجام می شه."
            />

            <div class="mt-8 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                @foreach (['Google Ads', 'Instagram / Meta', 'LinkedIn Ads', 'CRM + Email'] as $platform)
                    <div class="premium-glass rounded-2xl px-5 py-4 text-center">
                        <p class="text-sm font-black text-white">{{ $platform }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-shell mt-18 grid gap-5 lg:grid-cols-2">
        <x-card title="نمونه کار: برند آموزش آنلاین" icon="CS" description="با بازطراحی پیام و قیف جذب، هزینه لید ۳۶٪ کاهش و فروش دوره ها ۲.۹ برابر شد." link-text="مشاهده جزئیات" :link-href="route('case-studies')" />
        <x-card title="پکیج رشد پیشنهادی Campino" icon="PR" description="برای برندهایی که هم لید بیشتر می خوان هم فروش قابل پیش بینی. طراحی کامل قیف + رسانه + گزارش فروش." link-text="مشاهده تعرفه" :link-href="route('pricing')" />
    </section>

    <section class="container-shell mt-18">
        <x-cta
            title="اگر برندت رشد می خواد، جلسه استراتژی رو از دست نده"
            description="در یک جلسه کوتاه، وضعیت فعلی قیف فروش شما را بررسی می کنیم و نقشه اجرایی سه ماهه می دهیم."
            primary-text="رزرو جلسه مشاوره"
            :primary-href="route('contact')"
            secondary-text="ثبت درخواست کمپین"
            :secondary-href="route('campaign-request')"
        />
    </section>
@endsection
