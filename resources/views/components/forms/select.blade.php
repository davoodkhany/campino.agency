@props([
    'name',
    'label',
    'options' => [],
    'required' => false,
])

<div>
    <label for="{{ $name }}" class="mb-2 block text-sm font-medium text-slate-200">{{ $label }}</label>
    <select
        id="{{ $name }}"
        name="{{ $name }}"
        @if ($required) required @endif
        {{ $attributes->merge(['class' => 'w-full rounded-xl border border-white/15 bg-slate-900/60 px-4 py-3 text-sm text-white outline-none transition focus:border-orange-300 focus:ring-2 focus:ring-orange-300/30']) }}
    >
        @foreach ($options as $value => $text)
            <option value="{{ $value }}" @selected(old($name) == $value)>{{ $text }}</option>
        @endforeach
    </select>
    @error($name)
        <p class="mt-2 text-xs text-rose-300">{{ $message }}</p>
    @enderror
</div>
