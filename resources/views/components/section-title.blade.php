@props([
    'kicker' => null,
    'title' => '',
    'description' => null,
    'center' => false,
])

<div {{ $attributes->class([$center ? 'text-center' : 'text-right']) }}>
    @if ($kicker)
        <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-[color:var(--gold)]/35 bg-[color:var(--gold-light)]/20 px-4 py-1.5 text-xs font-extrabold text-[color:var(--gold-light)]">
            <span class="h-1.5 w-1.5 rounded-full bg-[color:var(--gold)]"></span>
            {{ $kicker }}
        </div>
    @endif

    <h2 class="text-3xl font-black leading-tight text-white md:text-4xl">
        {{ $title }}
    </h2>

    <div class="{{ $center ? 'mx-auto' : '' }} mt-4 h-px w-28 bg-gradient-to-l from-[color:var(--gold)]/70 to-transparent"></div>

    @if ($description)
        <p class="mt-5 max-w-3xl text-[15px] leading-8 text-[color:var(--gold-light)]/90 {{ $center ? 'mx-auto' : '' }}">
            {{ $description }}
        </p>
    @endif
</div>
