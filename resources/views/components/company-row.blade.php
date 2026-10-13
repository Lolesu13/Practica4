@props(['company'])

<tr class="border-b border-[#f0eef5] align-top transition hover:bg-[#fcfbfe]">
    <td class="min-w-[225px] px-4 py-4">
        <div class="flex items-start gap-3">
            <img src="{{ asset('images/' . $company['logo']) }}" alt="Logo de {{ $company['name'] }}" class="size-9 shrink-0 rounded-lg border border-[#eeecf3] bg-white object-contain p-1" onerror="this.hidden=true; this.nextElementSibling.hidden=false">
            <span hidden class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-[#f0eaff] text-[10px] font-bold text-[#6941bd]">{{ $company['initials'] }}</span>
            <div class="min-w-0">
                <a href="#" class="block font-semibold leading-5 text-[#39354d] hover:text-[#5524c7]">{{ $company['name'] }}</a>
                <p class="mt-1 text-[10px] text-[#9290a0]">{{ $company['domain'] }} <span class="px-1">·</span> {{ $company['location'] }}</p>
            </div>
        </div>
    </td>
    <td class="min-w-[170px] px-4 py-4">
        <div class="flex max-w-[180px] flex-wrap gap-1.5">
            @foreach ($company['brands'] as $brand)
                <span class="rounded-md bg-[#f2f0f7] px-2 py-1 text-[9px] font-medium text-[#615d72]">{{ $brand }}</span>
            @endforeach
            @if ($company['extra_brands'])
                <span class="rounded-md bg-[#f2edff] px-2 py-1 text-[9px] font-semibold text-[#6941bd]">+{{ $company['extra_brands'] }} marcas</span>
            @endif
        </div>
    </td>
    <td class="min-w-[175px] px-4 py-4">
        <p class="text-xs font-medium text-[#514d64]">{{ $company['contact'] }}</p>
        <a href="mailto:{{ $company['email'] }}" class="mt-1 block text-[10px] text-[#918da0] hover:text-[#6941bd]">{{ $company['email'] }}</a>
        <p class="mt-1 text-[9px] text-[#aaa7b5]">{{ $company['phone'] }}</p>
    </td>
    <td class="min-w-[185px] px-4 py-4">
        <p class="text-xs font-semibold text-[#514d64]">{{ $company['campaigns'] }} activas <span class="font-normal text-[#aaa7b5]">+ {{ $company['past_campaigns'] }} históricas</span></p>
        <div class="mt-2 flex flex-wrap gap-1.5">
            @foreach ($company['campaign_tags'] as $tag)
                <span class="rounded-md bg-[#f2edff] px-2 py-1 text-[9px] font-medium text-[#6941bd]">{{ $tag }}</span>
            @endforeach
        </div>
    </td>
    <td class="min-w-[145px] px-4 py-4">
        <p class="text-xs font-semibold text-[#514d64]">{{ $company['players'] }} jugadores</p>
        <p class="mt-1 text-[10px] text-[#858195]">{{ $company['redemptions'] }} canjes</p>
        <p class="mt-1 text-[9px] text-[#21825a]">{{ $company['engagement'] }} engagement</p>
    </td>
    <td class="min-w-[140px] px-4 py-4">
        <span class="inline-flex rounded-md bg-[#f2edff] px-2 py-1 text-[9px] font-semibold text-[#6941bd]">{{ $company['plan'] }}</span>
        <p class="mt-2 text-[10px] font-medium text-[#656176]">{{ $company['sla'] }}</p>
        <span class="mt-1 inline-flex items-center gap-1.5 text-[9px] font-semibold text-[#21825a]"><span class="size-1.5 rounded-full bg-[#28aa75]"></span>{{ $company['status'] }}</span>
    </td>
    <td class="sticky right-0 bg-white px-3 py-4 text-right group-hover:bg-[#fcfbfe]">
        <button type="button" aria-label="Más opciones para {{ $company['name'] }}" class="rounded-md px-2 py-1 text-lg leading-none text-[#8d899b] hover:bg-[#f1eef8] hover:text-[#514d64]">···</button>
    </td>
</tr>