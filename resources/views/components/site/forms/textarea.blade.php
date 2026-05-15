@props([
    'label',
    'name',
    'placeholder' => '',
    'rows' => 5,
    'required' => false,
])

<div class="space-y-2">
    <label for="{{ $name }}" class="block text-sm font-semibold text-slate-700">{{ $label }}</label>

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->class('w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100') }}
    >{{ old($name) }}</textarea>

    @error($name)
        <p class="text-xs font-medium text-rose-600">{{ $message }}</p>
    @enderror
</div>
