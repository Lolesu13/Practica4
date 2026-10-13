@extends('layouts.app')

@section('title', 'Directorio de empresas')

@section('content')
@php
    $companies = [
        [
            'name' => 'Restaurant Brands Iberia', 'initials' => 'RBI', 'logo' => 'restaurant-brands-iberia.png',
            'domain' => 'rbiberia.com', 'location' => 'España & Portugal',
            'brands' => ['Burger King', 'Popeyes', 'Tim Hortons'], 'extra_brands' => 12,
            'contact' => 'Carlos Méndez', 'email' => 'c.mendez@rbiberia.com', 'phone' => '+34 91 000 00 00',
            'campaigns' => 5, 'past_campaigns' => 12, 'campaign_tags' => ['Whopper Week', 'Cazatesoros'],
            'players' => '420.5K', 'redemptions' => '86.2K', 'engagement' => '74.1%',
            'plan' => 'Enterprise', 'sla' => 'SLA Premium', 'status' => 'Activo',
        ],
        [
            'name' => 'Banco Santander S.A.', 'initials' => 'SAN', 'logo' => 'banco-santander.png',
            'domain' => 'santander.es', 'location' => 'Madrid, España',
            'brands' => ['Santander', 'Openbank', 'Getnet'], 'extra_brands' => 4,
            'contact' => 'Marta Sáez Puig', 'email' => 'marta.saez@santander.es', 'phone' => '+34 91 000 00 01',
            'campaigns' => 2, 'past_campaigns' => 8, 'campaign_tags' => ['Ahorra y Gana'],
            'players' => '812.0K', 'redemptions' => '112.4K', 'engagement' => '68.3%',
            'plan' => 'Enterprise', 'sla' => 'SLA Premium', 'status' => 'Activo',
        ],
        [
            'name' => 'Real Betis Global', 'initials' => 'RBG', 'logo' => 'real-betis.png',
            'domain' => 'realbetisbalompie.es', 'location' => 'Sevilla, España',
            'brands' => ['Real Betis', 'Betis Féminas'], 'extra_brands' => 2,
            'contact' => 'Lucía Rodríguez', 'email' => 'l.rodriguez@realbetis.es', 'phone' => '+34 95 000 00 02',
            'campaigns' => 4, 'past_campaigns' => 9, 'campaign_tags' => ['Jornada Verde', 'Betis Fan'],
            'players' => '126.8K', 'redemptions' => '34.1K', 'engagement' => '81.6%',
            'plan' => 'Growth', 'sla' => 'SLA Plus', 'status' => 'Activo',
        ],
        [
            'name' => 'Coca-Cola Europacific Partners', 'initials' => 'CC', 'logo' => 'coca-cola-europacific.png',
            'domain' => 'ccep.com', 'location' => 'Madrid, España',
            'brands' => ['Coca-Cola', 'Fanta', 'Aquarius'], 'extra_brands' => 7,
            'contact' => 'Javier Navarro', 'email' => 'j.navarro@ccep.com', 'phone' => '+34 91 000 00 03',
            'campaigns' => 3, 'past_campaigns' => 15, 'campaign_tags' => ['Verano Comparte'],
            'players' => '504.2K', 'redemptions' => '96.7K', 'engagement' => '72.9%',
            'plan' => 'Enterprise', 'sla' => 'SLA Premium', 'status' => 'Activo',
        ],
    ];
@endphp

<div class="min-h-screen overflow-x-clip lg:flex">
    <aside class="flex w-full shrink-0 flex-col border-b border-[#eae8f1] bg-white px-4 py-4 lg:min-h-screen lg:w-60 lg:border-b-0 lg:border-r lg:px-5 lg:py-6">
        <a href="{{ url('/') }}" class="mb-6 flex items-center gap-2.5 text-sm font-extrabold text-[#29253b] lg:mb-8">
            <span class="flex size-8 items-center justify-center rounded-lg bg-[#5524c7] text-white">
                <svg viewBox="0 0 24 24" class="size-5" fill="none" aria-hidden="true"><path d="M5 17.5 9.2 6.8a1 1 0 0 1 1.86 0l1.15 2.93 1.1-2.93a1 1 0 0 1 1.87 0L19 17.5M7 13h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <span>PlayMetrics Pro <span class="block text-[10px] font-medium text-[#918da3]">Engagement Platform</span></span>
        </a>

        <x-button class="w-full" type="button">
            <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M10 4v12M4 10h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            Nueva Actividad
        </x-button>

        <nav aria-label="Navegación principal" class="mt-5 grid grid-cols-2 gap-1 sm:grid-cols-3 lg:flex lg:flex-col">
            @foreach ([['Panel General', '▦'], ['Campañas', '◈'], ['Minijuegos', '⌘'], ['Audiencias', '◉'], ['Analítica', '▥'], ['Configuración', '⚙']] as [$item, $icon])
                <a href="#" @class([
                    'flex items-center gap-3 rounded-lg px-3 py-2.5 text-xs font-semibold transition',
                    'bg-[#5524c7] text-white shadow-sm' => $item === 'Audiencias',
                    'text-[#77738a] hover:bg-[#f5f3fa] hover:text-[#39354d]' => $item !== 'Audiencias',
                ])>
                    <span class="w-4 text-center text-sm" aria-hidden="true">{{ $icon }}</span>
                    {{ $item }}
                </a>
            @endforeach
        </nav>

        <div class="mt-auto hidden border-t border-[#eeecf3] pt-4 text-xs text-[#77738a] lg:block">
            <a href="#" class="block py-2">Centro de Ayuda</a>
            <a href="#" class="block py-2">Cerrar Sesión</a>
            <div class="mt-4 flex items-center justify-between rounded-lg bg-[#faf9fc] p-2.5 text-[10px]">
                <span class="flex items-center gap-2"><span class="size-2 rounded-full bg-[#28aa75]"></span>Cluster EU-West-1</span>
                <span class="font-semibold">32 ms</span>
            </div>
        </div>
    </aside>

    <main class="min-w-0 flex-1">
        <header class="flex flex-wrap items-center justify-between gap-3 border-b border-[#eae8f1] bg-white px-4 py-3 sm:px-7 lg:px-8">
            <div class="flex min-w-0 flex-1 items-center gap-4">
                <a href="{{ route('usuarios.index') }}" class="shrink-0 text-sm font-bold text-[#38344b]">PlayMetrics <span class="ml-1 rounded bg-[#f2edff] px-1.5 py-1 text-[9px] font-bold text-[#6941bd]">CORE</span></a>
                <div class="hidden max-w-xs flex-1 xl:block"><x-search-input name="global_search" placeholder="Buscar por empresa, ID de cliente..." /></div>
            </div>
            <nav aria-label="Acciones de cuenta" class="flex items-center gap-2 sm:gap-4">
                <a href="#" class="hidden text-[11px] font-medium text-[#777387] md:inline">Documentación</a>
                <a href="#" class="hidden text-[11px] font-medium text-[#777387] lg:inline">Soporte</a>
                <a href="#" class="hidden text-[11px] font-medium text-[#777387] xl:inline">API</a>
                <div class="hidden sm:block">
                    <x-button variant="secondary" class="!px-3 !py-2">
                        <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M10 3v9m0 0 3-3m-3 3L7 9M4 13v3h12v-3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Exportar informe
                    </x-button>
                </div>
                <span class="flex size-8 items-center justify-center rounded-full bg-[#e8ddff] text-xs font-bold text-[#5524c7]" aria-label="Perfil de usuario">AM</span>
            </nav>
        </header>

        <div class="mx-auto max-w-[1640px] px-4 py-6 sm:px-7 sm:py-8 lg:px-8">
            <div class="mb-2 text-[10px] font-medium text-[#9692a4]">Directorio Empresarial <span class="px-1.5">›</span> <span class="font-semibold text-[#514d64]">Empresas y Marcas a Bordo</span></div>
            <section class="mb-6 flex flex-col justify-between gap-4 xl:flex-row xl:items-end">
                <div>
                    <h1 class="font-display text-2xl font-bold text-[#29253b] sm:text-[28px]">Empresas y Marcas a Bordo</h1>
                    <p class="mt-2 max-w-3xl text-xs leading-5 text-[#79758a]">Supervisa todas las empresas suscritas a PlayMetrics, sus marcas filiales asociadas, campañas de minijuegos activas y desempeño de fidelización corporativa en tiempo real.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    <x-button variant="secondary" class="!px-3 !py-2.5">
                        <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M10 3v9m0 0 3-3m-3 3L7 9M4 13v3h12v-3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Exportar Directorio CSV
                    </x-button>
                    <x-button class="!px-3 !py-2.5">
                        <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M10 4v12M4 10h12" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
                        Dar de Alta Nueva Empresa
                    </x-button>
                </div>
            </section>

            <section aria-label="Indicadores del directorio" class="mb-5 grid grid-cols-1 gap-3 min-[480px]:grid-cols-2 2xl:grid-cols-4">
                <x-metric-card label="Empresas Activas" value="84" change="+12.5%" note="79 con SLA empresarial activo" icon="▣" />
                <x-metric-card label="Marcas / Filiales" value="216" change="+3.9%" note="Desplegadas en 14 países" icon="◈" />
                <x-metric-card label="Campañas Lanzadas Totales" value="342" change="+42 este mes" note="$20.4K en recompensas activas" icon="▥" />
                <x-metric-card label="MRR del Programa" value="$128.4K" change="+8.2%" note="Ingresos recurrentes mensuales" icon="$" />
            </section>

            <section class="overflow-hidden rounded-xl border border-[#eae7f0] bg-white shadow-[0_2px_9px_rgba(45,35,75,0.025)]">
                <form action="{{ route('usuarios.index') }}" method="GET" class="border-b border-[#eeecf3] p-4 sm:p-5">
                    <div class="flex flex-col gap-2 xl:flex-row">
                        <x-search-input name="empresa" placeholder="Buscar por nombre de empresa, dominio corporativo..." />
                        <label class="sr-only" for="sector">Sector</label>
                        <select id="sector" name="sector" class="rounded-lg border border-[#e9e6f0] bg-white px-3 py-2.5 text-xs text-[#625e73] outline-none focus:border-violet-400 focus:ring-4 focus:ring-violet-100"><option>Sector: Todos (18)</option><option>Finanzas</option><option>Alimentación</option><option>Deportes</option></select>
                        <label class="sr-only" for="plan">Plan</label>
                        <select id="plan" name="plan" class="rounded-lg border border-[#e9e6f0] bg-white px-3 py-2.5 text-xs text-[#625e73] outline-none focus:border-violet-400 focus:ring-4 focus:ring-violet-100"><option>Plan: Todos los niveles</option><option>Enterprise</option><option>Growth</option></select>
                        <label class="sr-only" for="estado">Estado</label>
                        <select id="estado" name="estado" class="rounded-lg border border-[#e9e6f0] bg-white px-3 py-2.5 text-xs text-[#625e73] outline-none focus:border-violet-400 focus:ring-4 focus:ring-violet-100"><option>Estado: Todos</option><option>Activo</option><option>En revisión</option></select>
                        <x-button variant="secondary" type="submit" class="!px-4 !py-2">Filtrar</x-button>
                    </div>
                    <div class="mt-3 flex flex-wrap items-center gap-2 text-[10px]">
                        <span class="font-semibold text-[#777387]">Filtros Activos:</span>
                        <span class="rounded-full bg-[#f2edff] px-2.5 py-1 font-medium text-[#6941bd]">Sector: Todos <span class="pl-1">×</span></span>
                        <span class="rounded-full bg-[#f2edff] px-2.5 py-1 font-medium text-[#6941bd]">Estado: Activo + Onboarding <span class="pl-1">×</span></span>
                        <a href="{{ route('usuarios.index') }}" class="ml-1 font-semibold text-[#6941bd] hover:underline">Restablecer todos</a>
                    </div>
                </form>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[1180px] border-collapse text-left">
                        <caption class="sr-only">Directorio maestro de empresas, marcas y campañas</caption>
                        <thead class="bg-[#f7f5fc] text-[9px] font-bold uppercase tracking-wide text-[#777387]">
                            <tr>
                                <th scope="col" class="w-9 px-4 py-3"><input type="checkbox" aria-label="Seleccionar todas las empresas" class="size-3.5 rounded border-[#d8d4e1] accent-[#5524c7]"></th>
                                <th scope="col" class="px-2 py-3">Empresa / Holding</th>
                                <th scope="col" class="px-4 py-3">Marcas filiales &amp; sub-marcas</th>
                                <th scope="col" class="px-4 py-3">Contacto corporativo</th>
                                <th scope="col" class="px-4 py-3">Campañas gamificadas</th>
                                <th scope="col" class="px-4 py-3">Volumen de jugadores &amp; canjes</th>
                                <th scope="col" class="px-4 py-3">Plan &amp; SLA</th>
                                <th scope="col" class="w-10 px-3 py-3"><span class="sr-only">Acciones</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <x-company-row :company="$company" />
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <footer class="flex flex-col items-start justify-between gap-3 border-t border-[#eeecf3] px-4 py-3 text-[10px] text-[#858195] sm:flex-row sm:items-center sm:px-5">
                    <p>Mostrando <span class="font-semibold text-[#514d64]">1-4</span> de <span class="font-semibold text-[#514d64]">84 empresas</span></p>
                    <nav aria-label="Paginación" class="flex items-center gap-1">
                        <button type="button" disabled class="rounded-md border border-[#eae7f0] px-2.5 py-1.5 text-[#aaa7b5]">Anterior</button>
                        <button type="button" aria-current="page" class="rounded-md bg-[#5524c7] px-2.5 py-1.5 font-semibold text-white">1</button>
                        <button type="button" class="rounded-md border border-[#eae7f0] px-2.5 py-1.5 hover:bg-[#f7f5fc]">2</button>
                        <button type="button" class="rounded-md border border-[#eae7f0] px-2.5 py-1.5 hover:bg-[#f7f5fc]">3</button>
                        <span class="px-1">…</span>
                        <button type="button" class="rounded-md border border-[#eae7f0] px-2.5 py-1.5 hover:bg-[#f7f5fc]">Siguiente</button>
                    </nav>
                </footer>
            </section>
        </div>
    </main>
</div>
@endsection