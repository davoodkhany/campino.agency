@php
    $quickLinks = [
        ['label' => 'خدمات', 'route' => 'services'],
        ['label' => 'تعرفه ها', 'route' => 'pricing'],
        ['label' => 'درخواست کمپین', 'route' => 'campaign-request'],
        ['label' => 'تماس', 'route' => 'contact'],
    ];
@endphp

<footer class="relative z-10 border-t border-white/10 bg-slate-900/70 py-12">
    <div class="mx-auto grid w-[min(95%,72rem)] gap-10 md:grid-cols-3">
        <div>
            <h3 class="text-lg font-extrabold text-white">کمپینو ایجنسی</h3>
            <p class="mt-3 text-sm leading-7 text-slate-300">
                همراه تیم مارکتینگ شما برای طراحی استراتژی، اجرا و بهینه سازی کمپین های تبلیغاتی با تمرکز روی لید و فروش.
            </p>
        </div>

        <div>
            <h4 class="text-sm font-bold text-slate-100">دسترسی سریع</h4>
            <ul class="mt-4 space-y-2 text-sm text-slate-300">
                @foreach ($quickLinks as $link)
                    <li>
                        <a href="{{ route($link['route']) }}" class="transition hover:text-orange-300">{{ $link['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div>
            <h4 class="text-sm font-bold text-slate-100">ارتباط با تیم فروش</h4>
            <ul class="mt-4 space-y-2 text-sm text-slate-300">
                <li>تلفن: 021-88888888</li>
                <li>ایمیل: hello@campino.agency</li>
                <li>تهران، ونک، خیابان ملاصدرا</li>
            </ul>
        </div>
    </div>

    <div class="mx-auto mt-10 w-[min(95%,72rem)] border-t border-white/10 pt-4 text-xs text-slate-400">
        © {{ now()->year }} کمپینو. همه حقوق محفوظ است.
    </div>
</footer>
