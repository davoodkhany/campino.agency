@php
    $links = [
        ['route' => 'home', 'label' => 'خانه'],
        ['route' => 'services', 'label' => 'خدمات'],
        ['route' => 'funnel-design', 'label' => 'طراحی فانل'],
        ['route' => 'advertising-platforms', 'label' => 'پلتفرم ها'],
        ['route' => 'case-studies', 'label' => 'نمونه کار'],
        ['route' => 'pricing', 'label' => 'تعرفه ها'],
        ['route' => 'blog', 'label' => 'بلاگ'],
        ['route' => 'contact', 'label' => 'تماس'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-slate-200/70 bg-white/90 backdrop-blur-md">
    <div class="mx-auto flex w-full max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-lg font-black text-slate-900">
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-sky-600 text-sm text-white">کم</span>
            <span>کمپینو</span>
        </a>

        <nav class="hidden items-center gap-1 lg:flex" aria-label="ناوبری اصلی">
            @foreach ($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'rounded-full px-3 py-2 text-sm font-medium transition',
                        'bg-sky-600 text-white shadow-sm' => request()->routeIs($link['route']),
                        'text-slate-700 hover:bg-slate-100 hover:text-slate-900' => ! request()->routeIs($link['route']),
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        <a
            href="{{ route('campaign-request') }}"
            @class([
                'rounded-full px-4 py-2 text-sm font-semibold transition',
                'bg-emerald-600 text-white hover:bg-emerald-700' => ! request()->routeIs('campaign-request'),
                'bg-emerald-700 text-white' => request()->routeIs('campaign-request'),
            ])
        >
            درخواست کمپین
        </a>
    </div>

    <div class="border-t border-slate-100 px-4 py-2 lg:hidden">
        <div class="mx-auto flex max-w-7xl gap-2 overflow-x-auto pb-1" aria-label="ناوبری موبایل">
            @foreach ($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'whitespace-nowrap rounded-full px-3 py-2 text-xs font-medium transition',
                        'bg-sky-600 text-white' => request()->routeIs($link['route']),
                        'bg-slate-100 text-slate-700' => ! request()->routeIs($link['route']),
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>
