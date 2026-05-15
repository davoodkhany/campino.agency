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

<header class="sticky top-0 z-40 pt-4">
    <div class="container-shell">
        <div class="premium-glass rounded-2xl px-4 py-3 md:px-6">
            <div class="flex items-center justify-between gap-3">
                <a href="{{ route('home') }}" class="group flex items-center gap-3">
                    <span class="gold-ring grid h-11 w-11 place-items-center rounded-xl bg-gradient-to-br from-[color:var(--gold-light)] to-[color:var(--gold)] text-sm font-black text-[color:var(--ink)]">
                        C
                    </span>
                    <div>
                        <p class="text-base font-black tracking-tight text-white">Campino Agency</p>
                        <p class="text-xs text-[color:var(--gold-light)]/75">Creative 360 Campaign Studio</p>
                    </div>
                </a>

                <nav class="hidden items-center gap-1 xl:flex">
                    @foreach ($navItems as $item)
                        @php $isActive = request()->routeIs($item['active']); @endphp
                        <a
                            href="{{ route($item['route']) }}"
                            class="rounded-xl px-3 py-2 text-sm font-semibold transition {{ $isActive ? 'bg-[color:var(--gold)] text-[color:var(--ink)] shadow-lg shadow-[color:var(--gold)]/30' : 'text-[color:var(--gold-light)]/90 hover:bg-white/10 hover:text-white' }}"
                        >
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </nav>

                <a href="{{ route('campaign-request') }}" class="hidden rounded-xl bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-5 py-2.5 text-sm font-black text-[color:var(--ink)] shadow-lg shadow-[color:var(--gold)]/30 transition hover:scale-[1.02] lg:inline-flex">
                    شروع کمپین
                </a>

                <details class="relative xl:hidden">
                    <summary class="list-none rounded-xl border border-[color:var(--gold-light)]/30 bg-white/5 px-3 py-2 text-sm font-semibold text-[color:var(--gold-light)]">
                        منو
                    </summary>
                    <div class="absolute left-0 mt-2 w-64 rounded-2xl border border-[color:var(--gold-light)]/20 bg-[color:var(--purple-deep)]/95 p-3 shadow-2xl shadow-black/40">
                        <nav class="flex flex-col gap-1">
                            @foreach ($navItems as $item)
                                @php $isActive = request()->routeIs($item['active']); @endphp
                                <a
                                    href="{{ route($item['route']) }}"
                                    class="rounded-xl px-3 py-2 text-sm transition {{ $isActive ? 'bg-[color:var(--gold)] text-[color:var(--ink)] font-bold' : 'text-[color:var(--gold-light)]/90 hover:bg-white/10 hover:text-white' }}"
                                >
                                    {{ $item['label'] }}
                                </a>
                            @endforeach
                            <a href="{{ route('campaign-request') }}" class="mt-2 rounded-xl bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-3 py-2 text-center text-sm font-black text-[color:var(--ink)]">
                                درخواست طراحی کمپین
                            </a>
                        </nav>
                    </div>
                </details>
            </div>
        </div>
    </div>
</header>
