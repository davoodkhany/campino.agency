@props([
    'title',
    'description' => null,
    'icon' => '+',
    'linkText' => null,
    'linkHref' => null,
])

<article {{ $attributes->class('rounded-2xl border border-white/10 bg-slate-900/70 p-5 shadow-lg shadow-slate-950/30') }}>
    <div class="flex items-center gap-3">
        <span class="grid h-10 w-10 place-items-center rounded-xl bg-white/10 text-sm font-bold">{{ $icon }}</span>
        <h3 class="text-lg font-bold text-white">{{ $title }}</h3>
    </div>

    @if ($description)
        <p class="mt-4 text-sm leading-7 text-slate-300">{{ $description }}</p>
    @endif

    @if (trim($slot) !== '')
        <div class="mt-4 text-sm leading-7 text-slate-300">
            {{ $slot }}
        </div>
    @endif

    @if ($linkText && $linkHref)
        <a href="{{ $linkHref }}" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-orange-300 transition hover:text-orange-200">
            {{ $linkText }}
            <span aria-hidden="true">&lt;</span>
        </a>
    @endif
</article>
