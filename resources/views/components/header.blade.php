@php
    $navItems = [
        ['label' => 'خانه', 'route' => 'home', 'active' => 'home'],
        ['label' => 'خدمات', 'route' => 'services', 'active' => 'services'],
        ['label' => 'طراحی فانل', 'route' => 'funnel-design', 'active' => 'funnel-design'],
        ['label' => 'پلتفرم های تبلیغاتی', 'route' => 'advertising-platforms', 'active' => 'advertising-platforms'],
        ['label' => 'نمونه کارها', 'route' => 'case-studies', 'active' => 'case-studies'],
        ['label' => 'تعرفه ها', 'route' => 'pricing', 'active' => 'pricing'],
        ['label' => 'بلاگ', 'route' => 'blog', 'active' => 'blog'],
    ];
@endphp

<header class="sticky top-0 z-30 border-b border-white/10 bg-slate-950/80 backdrop-blur">
    <div class="mx-auto flex w-[min(95%,72rem)] items-center justify-between gap-4 py-4">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <span class="grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br from-orange-400 to-amber-500 text-lg font-extrabold text-slate-950">ک</span>
            <div>
                <p class="text-base font-extrabold tracking-tight text-white">Campino Agency</p>
                <p class="text-xs text-slate-300">کمپین 360 درجه برای رشد برند</p>
            </div>
        </a>

        <nav class="hidden items-center gap-2 lg:flex">
            @foreach ($navItems as $item)
                @php $isActive = request()->routeIs($item['active']); @endphp
                <a
                    href="{{ route($item['route']) }}"
                    class="rounded-xl px-3 py-2 text-sm transition {{ $isActive ? 'bg-orange-400 text-slate-950 font-bold' : 'text-slate-200 hover:bg-white/10 hover:text-white' }}"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="hidden lg:block">
            <a href="{{ route('campaign-request') }}" class="rounded-xl bg-emerald-400 px-4 py-2 text-sm font-bold text-slate-950 transition hover:bg-emerald-300">
                شروع کمپین
            </a>
        </div>

        <details class="relative lg:hidden">
            <summary class="list-none rounded-xl border border-white/15 px-3 py-2 text-sm text-slate-100">
                منو
            </summary>
            <div class="absolute left-0 mt-2 w-64 rounded-2xl border border-white/10 bg-slate-900/95 p-3 shadow-xl">
                <nav class="flex flex-col gap-1">
                    @foreach ($navItems as $item)
                        @php $isActive = request()->routeIs($item['active']); @endphp
                        <a
                            href="{{ route($item['route']) }}"
                            class="rounded-xl px-3 py-2 text-sm transition {{ $isActive ? 'bg-orange-400 text-slate-950 font-bold' : 'text-slate-200 hover:bg-white/10 hover:text-white' }}"
                        >
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                    <a href="{{ route('campaign-request') }}" class="mt-2 rounded-xl bg-emerald-400 px-3 py-2 text-center text-sm font-bold text-slate-950">
                        شروع کمپین
                    </a>
                </nav>
            </div>
        </details>
    </div>
</header>
