@props([
    'title',
    'description',
    'primaryText' => 'شروع همکاری',
    'primaryHref' => '#',
    'secondaryText' => null,
    'secondaryHref' => '#',
])

<section class="rounded-3xl border border-white/10 bg-gradient-to-l from-orange-400/20 via-amber-300/10 to-emerald-400/20 p-6 md:p-8">
    <div class="flex flex-col gap-5 md:flex-row md:items-center md:justify-between">
        <div class="max-w-2xl">
            <h3 class="text-2xl font-extrabold text-white">{{ $title }}</h3>
            <p class="mt-3 text-sm leading-7 text-slate-200">{{ $description }}</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="{{ $primaryHref }}" class="rounded-xl bg-emerald-400 px-5 py-2.5 text-sm font-bold text-slate-950 transition hover:bg-emerald-300">
                {{ $primaryText }}
            </a>

            @if ($secondaryText)
                <a href="{{ $secondaryHref }}" class="rounded-xl border border-white/20 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-white/10">
                    {{ $secondaryText }}
                </a>
            @endif
        </div>
    </div>
</section>
