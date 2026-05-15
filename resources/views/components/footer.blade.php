@php
    $quickLinks = [
        ['label' => 'خدمات', 'route' => 'services'],
        ['label' => 'طراحی فانل', 'route' => 'funnel-design'],
        ['label' => 'پلتفرم ها', 'route' => 'advertising-platforms'],
        ['label' => 'تعرفه ها', 'route' => 'pricing'],
        ['label' => 'درخواست کمپین', 'route' => 'campaign-request'],
    ];
@endphp

<footer class="relative z-10 mt-20 border-t border-[color:var(--gold-light)]/20 bg-[color:var(--purple-deep)]/95 py-16">
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -top-14 right-[8%] h-40 w-40 rounded-full bg-[color:var(--gold)]/18 blur-3xl"></div>
        <div class="absolute bottom-0 left-[8%] h-44 w-44 rounded-full bg-[color:var(--purple-light)]/24 blur-3xl"></div>
    </div>

    <div class="container-shell relative grid gap-10 lg:grid-cols-[1.2fr_.8fr_.9fr]">
        <div>
            <div class="flex items-center gap-3">
                <span class="gold-ring grid h-11 w-11 place-items-center rounded-xl bg-gradient-to-br from-[color:var(--gold-light)] to-[color:var(--gold)] text-sm font-black text-[color:var(--ink)]">C</span>
                <p class="text-lg font-black text-white">Campino Agency</p>
            </div>
            <p class="mt-4 max-w-md text-sm leading-8 text-[color:var(--gold-light)]/85">
                کمپینو برای برندها مسیر کامل رشد طراحی می کنه؛ از استراتژی، تولید پیام و لندینگ تا اجرا،
                تحلیل، CRM و بهینه سازی فروش.
            </p>
            <a href="{{ route('campaign-request') }}" class="mt-6 inline-flex rounded-xl bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-5 py-2.5 text-sm font-black text-[color:var(--ink)] shadow-lg shadow-[color:var(--gold)]/30 transition hover:scale-[1.02]">
                درخواست طراحی کمپین
            </a>
        </div>

        <div>
            <h4 class="text-sm font-black tracking-wide text-white">لینک های سریع</h4>
            <ul class="mt-5 space-y-2.5 text-sm text-[color:var(--gold-light)]/85">
                @foreach ($quickLinks as $link)
                    <li>
                        <a href="{{ route($link['route']) }}" class="inline-flex items-center gap-2 transition hover:text-white">
                            <span class="h-1.5 w-1.5 rounded-full bg-[color:var(--gold)]"></span>
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="premium-glass rounded-2xl p-5">
            <h4 class="text-sm font-black tracking-wide text-white">ارتباط مستقیم با تیم فروش</h4>
            <ul class="mt-4 space-y-3 text-sm text-[color:var(--gold-light)]/90">
                <li>تلفن: 021-88888888</li>
                <li>ایمیل: hello@campino.agency</li>
                <li>تهران، ونک، خیابان ملاصدرا</li>
            </ul>
            <a href="{{ route('contact') }}" class="mt-5 inline-flex rounded-xl border border-[color:var(--gold)]/40 px-4 py-2 text-sm font-bold text-[color:var(--gold-light)] transition hover:bg-[color:var(--gold-light)]/12">
                رزرو تماس مشاوره
            </a>
        </div>
    </div>

    <div class="container-shell relative mt-10 border-t border-[color:var(--gold-light)]/20 pt-5 text-xs text-[color:var(--gold-light)]/70">
        © {{ now()->year }} Campino Agency. تمامی حقوق محفوظ است.
    </div>
</footer>
