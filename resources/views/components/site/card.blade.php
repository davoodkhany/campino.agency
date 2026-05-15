@props([
    'title' => null,
    'description' => null,
])

<article {{ $attributes->class('rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md') }}>
    @if ($title)
        <h3 class="text-lg font-bold text-slate-900">{{ $title }}</h3>
    @endif

    @if ($description)
        <p class="mt-2 text-sm leading-7 text-slate-600">{{ $description }}</p>
    @endif

    @if (trim($slot) !== '')
        <div class="mt-4 text-sm leading-7 text-slate-600">
            {{ $slot }}
        </div>
    @endif
</article>
