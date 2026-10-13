@props([
    'name' => 'search',
    'placeholder' => 'Buscar...',
])

<label class="relative block min-w-0 flex-1">
    <span class="sr-only">{{ $placeholder }}</span>
    <svg viewBox="0 0 20 20" class="pointer-events-none absolute left-3 top-1/2 size-4 -translate-y-1/2 text-[#9995a6]" fill="none" aria-hidden="true">
        <circle cx="8.8" cy="8.8" r="5.8" stroke="currentColor" stroke-width="1.5" />
        <path d="m13 13 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
    </svg>
    <input
        type="search"
        name="{{ $name }}"
        value="{{ old($name, request($name, '')) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->class('w-full rounded-lg border border-[#e9e6f0] bg-white py-2.5 pl-9 pr-3 text-xs text-[#37334a] outline-none transition placeholder:text-[#aaa7b5] focus:border-violet-400 focus:ring-4 focus:ring-violet-100') }}
    >
</label>