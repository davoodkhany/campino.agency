@props([
    'text' => 'ارسال',
])

<button type="submit" {{ $attributes->merge(['class' => 'rounded-xl bg-emerald-400 px-5 py-3 text-sm font-bold text-slate-950 transition hover:bg-emerald-300']) }}>
    {{ $text }}
</button>
