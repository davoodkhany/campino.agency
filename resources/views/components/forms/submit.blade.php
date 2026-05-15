@props([
    'text' => 'ارسال',
])

<button type="submit" {{ $attributes->merge(['class' => 'rounded-xl bg-gradient-to-r from-[color:var(--gold)] to-[color:var(--gold-light)] px-6 py-3 text-sm font-black text-[color:var(--ink)] shadow-lg shadow-[color:var(--gold)]/35 transition hover:scale-[1.02]']) }}>
    {{ $text }}
</button>
