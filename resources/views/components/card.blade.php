@props([
    'title',
    'description' => null,
    'icon' => '+',
    'linkText' => null,
    'linkHref' => null,
])

<article {{ $attributes->class('premium-card relative overflow-hidden rounded-3xl p-6 transition duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-[color:var(--purple)]/25') }}>
    <div class="pointer-events-none absolute -left-10 -top-10 h-28 w-28 rounded-full bg-[color:var(--purple-light)]/22 blur-2xl"></div>

    <div class="relative flex items-center gap-3">
        <span class="grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br from-[color:var(--gold)] to-[color:var(--gold-light)] text-sm font-black text-[color:var(--ink)] shadow-md shadow-[color:var(--gold)]/40">
            {{ $icon }}
        </span>
        <h3 class="text-xl font-black text-[color:var(--ink)]">{{ $title }}</h3>
    </div>

    @if ($description)
        <p class="relative mt-5 text-sm leading-8 text-[color:var(--ink)]/80">
            {{ $description }}
        </p>
    @endif

    @if (trim($slot) !== '')
        <div class="relative mt-4 text-sm leading-8 text-[color:var(--ink)]/80">
            {{ $slot }}
        </div>
    @endif

    @if ($linkText && $linkHref)
        <a href="{{ $linkHref }}" class="relative mt-6 inline-flex items-center gap-2 text-sm font-black text-[color:var(--purple)] transition hover:text-[color:var(--purple-deep)]">
            {{ $linkText }}
            <span aria-hidden="true" class="text-xs">&lt;</span>
        </a>
    @endif
</article>
