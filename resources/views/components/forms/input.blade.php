@props([
    'name',
    'label',
    'type' => 'text',
    'placeholder' => '',
    'value' => null,
    'required' => false,
])

<div>
    <label for="{{ $name }}" class="mb-2 block text-sm font-bold text-white">{{ $label }}</label>
    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if ($required) required @endif
        {{ $attributes->merge(['class' => 'w-full rounded-xl border border-[color:var(--gold-light)]/30 bg-white/90 px-4 py-3 text-sm text-[color:var(--ink)] outline-none transition placeholder:text-[color:var(--ink)]/45 focus:border-[color:var(--gold)] focus:ring-2 focus:ring-[color:var(--gold)]/35']) }}
    >
    @error($name)
        <p class="mt-2 text-xs text-[color:var(--gold-light)]">{{ $message }}</p>
    @enderror
</div>
