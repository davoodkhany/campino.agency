@props([
    'title',
    'description',
    'primaryText' => 'درخواست مشاوره',
    'primaryUrl' => '#',
    'secondaryText' => null,
    'secondaryUrl' => '#',
])

<section class="rounded-3xl border border-slate-200 bg-gradient-to-l from-sky-700 to-cyan-600 px-6 py-8 text-white shadow-sm sm:px-8 sm:py-10">
    <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div class="max-w-2xl space-y-2">
            <h3 class="text-xl font-black sm:text-2xl">{{ $title }}</h3>
            <p class="text-sm leading-7 text-sky-50 sm:text-base">{{ $description }}</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <a href="{{ $primaryUrl }}" class="rounded-full bg-white px-5 py-2.5 text-sm font-bold text-sky-700 transition hover:bg-slate-100">
                {{ $primaryText }}
            </a>

            @if ($secondaryText)
                <a href="{{ $secondaryUrl }}" class="rounded-full border border-white/60 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10">
                    {{ $secondaryText }}
                </a>
            @endif
        </div>
    </div>
</section>
