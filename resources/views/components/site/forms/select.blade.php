@props([
    'label',
    'name',
    'options' => [],
    'placeholder' => 'انتخاب کنید',
    'required' => false,
])

<div class="space-y-2">
    <label for="{{ $name }}" class="block text-sm font-semibold text-slate-700">{{ $label }}</label>

    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->class('w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100') }}
    >
        <option value="">{{ $placeholder }}</option>

        @foreach ($options as $value => $text)
            <option value="{{ $value }}" @selected(old($name) == $value)>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="text-xs font-medium text-rose-600">{{ $message }}</p>
    @enderror
</div>
