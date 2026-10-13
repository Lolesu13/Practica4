@props([
    'label',
    'value',
    'change',
    'note',
    'icon' => '◈',
])

<article class="min-w-0 rounded-xl border border-[#eae7f0] bg-white p-4 shadow-[0_2px_9px_rgba(45,35,75,0.025)] sm:p-5">
    <div class="mb-4 flex items-center justify-between gap-2">
        <h2 class="truncate text-[11px] font-semibold text-[#777387]">{{ $label }}</h2>
        <span class="flex size-7 shrink-0 items-center justify-center rounded-md bg-[#f2edff] text-sm font-bold text-[#6941bd]" aria-hidden="true">{{ $icon }}</span>
    </div>
    <div class="flex flex-wrap items-baseline gap-2">
        <p class="font-display text-[26px] font-bold leading-none text-[#28243a]">{{ $value }}</p>
        <span class="rounded-full bg-[#eaf8f1] px-2 py-1 text-[9px] font-bold text-[#21825a]">{{ $change }}</span>
    </div>
    <p class="mt-3 truncate text-[10px] text-[#9591a2]">{{ $note }}</p>
</article>