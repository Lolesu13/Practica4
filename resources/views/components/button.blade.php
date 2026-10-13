@props([
    'variant' => 'primary',
    'type' => 'button',
])

<button
    type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex items-center justify-center gap-2 rounded-lg px-4 py-2.5 text-sm font-semibold transition focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-60',
        'bg-[#5524c7] text-white shadow-sm hover:bg-[#4520a4] focus:ring-violet-200' => $variant === 'primary',
        'border border-[#e4e1ed] bg-white text-[#514d64] hover:bg-[#f8f7fb] focus:ring-slate-100' => $variant === 'secondary',
    ]) }}
>
    {{ $slot }}
</button>