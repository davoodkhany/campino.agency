@props([
    'eyebrow' => null,
    'title' => '',
    'description' => null,
    'align' => 'right',
])

@php
    $isCenter = $align === 'center';
@endphp

<div @class([
    'max-w-3xl space-y-3',
    'mx-auto text-center' => $isCenter,
    'text-right' => ! $isCenter,
])>
    @if ($eyebrow)
        <p class="text-sm font-semibold tracking-wide text-sky-700">{{ $eyebrow }}</p>
    @endif

    <h2 class="text-2xl font-black leading-tight text-slate-900 sm:text-3xl">{{ $title }}</h2>

    @if ($description)
        <p class="text-base leading-8 text-slate-600">{{ $description }}</p>
    @endif

    {{ $slot }}
</div>
