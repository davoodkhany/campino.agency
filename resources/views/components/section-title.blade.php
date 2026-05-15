@props([
    'kicker' => null,
    'title' => '',
    'description' => null,
    'center' => false,
])

<div {{ $attributes->class([$center ? 'text-center' : 'text-right']) }}>
    @if ($kicker)
        <p class="mb-3 inline-flex rounded-full border border-orange-300/30 bg-orange-400/10 px-3 py-1 text-xs font-bold text-orange-200">
            {{ $kicker }}
        </p>
    @endif

    <h2 class="text-2xl font-extrabold leading-tight text-white md:text-3xl">{{ $title }}</h2>

    @if ($description)
        <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300 {{ $center ? 'mx-auto' : '' }}">{{ $description }}</p>
    @endif
</div>
