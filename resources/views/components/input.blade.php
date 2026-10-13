@props([
    'name',
    'label',
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
])

<div {{ $attributes->only('class') }}>
    <label for="{{ $name }}" class="mb-1.5 block text-xs font-semibold text-[#49465b]">
        {{ $label }} <span class="text-rose-500">*</span>
    </label>
    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @class([
            'w-full rounded-lg border bg-white px-3.5 py-2.5 text-sm text-[#28253b] outline-none transition placeholder:text-[#a7a4b5] focus:border-violet-500 focus:ring-4 focus:ring-violet-100',
            'border-rose-400' => $errors->has($name),
            'border-[#e8e6ef]' => ! $errors->has($name),
        ])
        {{ $attributes->except('class') }}
    >
    @error($name)
        <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
    @enderror
</div>