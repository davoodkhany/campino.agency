@props([
    'title',
    'description',
    'primaryText' => 'شروع همکاری',
    'primaryHref' => '#',
    'secondaryText' => null,
    'secondaryHref' => '#',
])

<section class="dark-surface relative overflow-hidden rounded-[2rem] p-7 md:p-10">
    <div class="pointer-events-none absolute -left-20 top-8 h-40 w-40 rounded-full bg-[color:var(--gold)]/22 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-16 bottom-0 h-48 w-48 rounded-full bg-[color:var(--purple-light)]/35 blur-3xl"></div>

    <div class="relative flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div class="max-w-2xl">
            <h3 class="text-2xl font-black leading-tight text-white md:text-3xl">{{ $title }}</h3>
            <p class="mt-4 text-sm leading-8 text-[color:var(--gold-light)]/92">{{ $description }}</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="{{ $primaryHref }}" class="rounded-xl bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-6 py-3 text-sm font-black text-[color:var(--ink)] shadow-xl shadow-[color:var(--gold)]/30 transition hover:scale-[1.03]">
                {{ $primaryText }}
            </a>

            @if ($secondaryText)
                <a href="{{ $secondaryHref }}" class="rounded-xl border border-[color:var(--gold-light)]/40 bg-white/5 px-6 py-3 text-sm font-bold text-[color:var(--gold-light)] transition hover:bg-white/10 hover:text-white">
                    {{ $secondaryText }}
                </a>
            @endif
        </div>
    </div>
</section>
