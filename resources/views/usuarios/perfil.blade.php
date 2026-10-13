@extends('layouts.app')

@section('title', 'Perfil y campañas')

@section('content')
@php
    $campaigns = [
        ['name' => 'Campaña Emociones 2025', 'status' => 'En vivo', 'active' => true],
        ['name' => 'Whopper Ahorro Real', 'status' => 'Programada', 'active' => false],
        ['name' => 'Desafío Balón', 'status' => 'Borrador', 'active' => false],
    ];
    $scheduleDays = old('schedule_days', ['viernes', 'sabado']);
@endphp

<div class="min-h-screen overflow-x-clip lg:flex">
    <aside class="flex w-full shrink-0 flex-col border-b border-[#eae8f1] bg-white px-4 py-4 lg:min-h-screen lg:w-60 lg:border-b-0 lg:border-r lg:px-5 lg:py-6">
        <a href="{{ url('/') }}" class="mb-6 flex items-center gap-2.5 text-sm font-extrabold text-[#29253b] lg:mb-8">
            <span class="flex size-8 items-center justify-center rounded-lg bg-[#5524c7] text-white">
                <svg viewBox="0 0 24 24" class="size-5" fill="none" aria-hidden="true"><path d="M5 17.5 9.2 6.8a1 1 0 0 1 1.86 0l1.15 2.93 1.1-2.93a1 1 0 0 1 1.87 0L19 17.5M7 13h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <span>PlayMetrics Pro <span class="block text-[10px] font-medium text-[#918da3]">Engagement Platform</span></span>
        </a>

        <span class="mb-4 inline-flex w-fit items-center gap-2 rounded-full bg-[#f1eff7] px-3 py-1.5 text-[9px] font-bold uppercase tracking-wide text-[#777387]"><span class="size-1.5 rounded-full bg-[#2ba775]"></span> Modo empresa <span class="text-[#9b97a8]">Test 1</span></span>

        <nav aria-label="Navegación principal" class="grid grid-cols-2 gap-1 sm:grid-cols-3 lg:flex lg:flex-col">
            @foreach ([['Panel General', '▦'], ['Campañas', '◈'], ['Minijuegos', '⌘'], ['Audiencias', '◉'], ['Analítica', '▥'], ['Configuración', '⚙']] as [$item, $icon])
                <a href="#" @class([
                    'flex items-center gap-3 rounded-lg px-3 py-2.5 text-xs font-semibold transition',
                    'bg-[#5524c7] text-white shadow-sm' => $item === 'Campañas',
                    'text-[#77738a] hover:bg-[#f5f3fa] hover:text-[#39354d]' => $item !== 'Campañas',
                ])>
                    <span class="w-4 text-center text-sm" aria-hidden="true">{{ $icon }}</span>
                    {{ $item }}
                </a>
            @endforeach
        </nav>

        <x-button class="mt-5 w-full">
            <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M10 4v12M4 10h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            Nueva Actividad
        </x-button>

        <div class="mt-auto hidden border-t border-[#eeecf3] pt-4 text-xs text-[#77738a] lg:block">
            <a href="#" class="block py-2">Centro de Ayuda</a>
            <a href="#" class="block py-2">Cerrar Sesión</a>
        </div>
    </aside>

    <main class="min-w-0 flex-1">
        <header class="flex flex-wrap items-center justify-between gap-3 border-b border-[#eae8f1] bg-white px-4 py-3 sm:px-7 lg:px-8">
            <div class="flex min-w-0 flex-1 items-center gap-4">
                <label class="relative hidden max-w-sm flex-1 xl:block">
                    <span class="sr-only">Buscar empresas, campañas o premios</span>
                    <svg viewBox="0 0 20 20" class="absolute left-3 top-1/2 size-4 -translate-y-1/2 text-[#a19daf]" fill="none" aria-hidden="true"><circle cx="8.8" cy="8.8" r="5.8" stroke="currentColor" stroke-width="1.5"/><path d="m13 13 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                    <input type="search" placeholder="Buscar empresas, campañas, premios..." class="w-full rounded-lg border border-[#eeecf3] bg-[#fbfafd] py-2 pl-9 pr-3 text-xs outline-none placeholder:text-[#aaa7b5] focus:border-violet-400">
                </label>
                <nav aria-label="Accesos rápidos" class="flex items-center gap-3 text-[10px] font-medium text-[#777387] sm:gap-4">
                    <a href="#" class="hidden sm:inline">Documentación</a>
                    <a href="#" class="hidden md:inline">Soporte</a>
                    <a href="#" class="hidden lg:inline">API</a>
                    <span class="hidden items-center gap-1 sm:inline-flex">Exportar informe <span aria-hidden="true">⌄</span></span>
                    <span class="rounded-md bg-[#5524c7] px-2.5 py-2 font-semibold text-white">＋ Crear Campaña</span>
                </nav>
            </div>
            <span class="flex size-8 items-center justify-center rounded-full bg-[#e8ddff] text-xs font-bold text-[#5524c7]" aria-label="Perfil de usuario">AM</span>
        </header>

        <div class="mx-auto max-w-[1480px] px-4 py-6 sm:px-7 sm:py-8 lg:px-9">
            <div class="mb-2 text-[10px] font-medium text-[#9692a4]">PlayMetrics Enterprise <span class="px-1.5">›</span> Campañas <span class="px-1.5">›</span> Burger King España &amp; Portugal</div>
            <section class="mb-5 flex flex-col justify-between gap-3 xl:flex-row xl:items-center">
                <div>
                    <p class="mb-1 text-[10px] font-bold uppercase tracking-[0.12em] text-[#7b59ce]">Portal de empresa</p>
                    <h1 class="font-display text-2xl font-bold text-[#29253b] sm:text-[28px]">Perfil de Empresa &amp; Control de Campañas Activas</h1>
                    <p class="mt-2 max-w-3xl text-xs leading-5 text-[#79758a]">Actualiza los datos corporativos de tu marca y controla en tiempo real las campañas, premios y participación de tus audiencias.</p>
                </div>
                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-[#eaf8f1] px-3 py-2 text-[10px] font-semibold text-[#21825a]"><span class="size-2 rounded-full bg-[#28aa75]"></span> Sincronización en vivo · 100% operativa</span>
            </section>

            <section aria-label="Indicadores de campaña" class="mb-5 grid grid-cols-1 gap-3 min-[480px]:grid-cols-2 xl:grid-cols-3">
                <article class="rounded-xl border border-[#eae7f0] bg-white p-4 shadow-[0_2px_9px_rgba(45,35,75,0.025)] sm:p-5">
                    <p class="text-[10px] font-semibold text-[#858195]">Jugadores registrados hoy</p>
                    <div class="mt-3 flex items-baseline gap-2"><span class="font-display text-[27px] font-bold leading-none text-[#29253b]">1,420</span><span class="text-[9px] font-semibold text-[#21825a]">+8% vs. promedio diario</span></div>
                    <p class="mt-2 text-[9px] text-[#a09cac]">En campañas activas esta semana</p>
                </article>
                <article class="rounded-xl border border-[#eae7f0] bg-white p-4 shadow-[0_2px_9px_rgba(45,35,75,0.025)] sm:p-5">
                    <p class="text-[10px] font-semibold text-[#858195]">Tasa de canje de premios</p>
                    <div class="mt-3 flex items-baseline gap-2"><span class="font-display text-[27px] font-bold leading-none text-[#29253b]">64.5%</span><span class="text-[9px] font-semibold text-[#21825a]">+4.2% este mes</span></div>
                    <p class="mt-2 text-[9px] text-[#a09cac]">Por encima del objetivo trimestral</p>
                </article>
                <article class="rounded-xl border border-[#eae7f0] bg-white p-4 shadow-[0_2px_9px_rgba(45,35,75,0.025)] sm:p-5">
                    <p class="text-[10px] font-semibold text-[#858195]">Presupuesto activo ahora</p>
                    <div class="mt-3 flex items-baseline gap-2"><span class="font-display text-[27px] font-bold leading-none text-[#29253b]">380</span><span class="text-[9px] font-semibold text-[#21825a]">recompensas disponibles</span></div>
                    <p class="mt-2 text-[9px] text-[#a09cac]">2 campañas distribuyendo premios</p>
                </article>
            </section>

            @if (session('status'))
                <div role="status" class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">{{ session('status') }}</div>
            @endif

            <form action="{{ route('usuarios.perfil') }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <section class="rounded-xl border border-[#eae7f0] bg-white p-4 shadow-[0_2px_9px_rgba(45,35,75,0.025)] sm:p-5">
                    <div class="mb-4 flex flex-col justify-between gap-3 border-b border-[#f0eef5] pb-4 sm:flex-row sm:items-center">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/burger-king-logo.png') }}" alt="Logo de Burger King" class="size-12 shrink-0 rounded-lg border border-[#eeecf3] bg-white object-contain p-1" onerror="this.hidden=true; this.nextElementSibling.hidden=false">
                            <span hidden class="flex size-12 shrink-0 items-center justify-center rounded-lg bg-[#fff0ed] text-[10px] font-extrabold text-[#d83220]">BK</span>
                            <div>
                                <h2 class="font-display text-base font-bold text-[#302c43]">Burger King España &amp; Portugal S.L.U.</h2>
                                <p class="mt-1 text-[10px] text-[#9692a4]">Marca verificada <span class="px-1">·</span> Cliente desde marzo 2023</p>
                            </div>
                            <span class="hidden rounded-full bg-[#eaf8f1] px-2.5 py-1 text-[9px] font-semibold text-[#21825a] sm:inline-flex">Empresa activa</span>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded-lg border border-[#ebe8f2] px-3 py-2 text-[10px] font-semibold text-[#625e73]">Plan Enterprise</span>
                            <x-button type="submit" class="!px-3 !py-2">
                                <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M4 4h10l2 2v10H4V4Zm3 0v4h6V4m-6 12v-5h6v5" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/></svg>
                                Guardar cambios
                            </x-button>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                        <x-input name="business_name" label="Razón social" value="Burger King España & Portugal S.L.U." autocomplete="organization" />
                        <x-input name="tax_id" label="Tax ID / CIF Fiscal" value="ES-B82355487" />
                        <x-input name="corporate_email" label="Correo corporativo principal" type="email" value="contacto@burgerking.es" autocomplete="email" />
                        <x-input name="website" label="Sitio web corporativo" type="url" value="https://www.burgerking.es" />
                    </div>

                    <div class="mt-4 flex flex-wrap items-center gap-2 border-t border-[#f0eef5] pt-4">
                        <span class="mr-1 text-[10px] font-semibold text-[#777387]">Marcas activas:</span>
                        @foreach (['Burger King', 'Popeyes', 'Tim Hortons'] as $brand)
                            <span class="rounded-md bg-[#f2f0f7] px-2.5 py-1.5 text-[9px] font-semibold text-[#625e73]">{{ $brand }}</span>
                        @endforeach
                        <span class="rounded-md bg-[#f2edff] px-2.5 py-1.5 text-[9px] font-semibold text-[#6941bd]">+12 marcas</span>
                        <span class="ml-auto text-[9px] text-[#9692a4]">La información se comparte en tus campañas.</span>
                    </div>
                </section>

                <section aria-label="Campañas de la empresa" class="overflow-hidden rounded-xl border border-[#eae7f0] bg-white shadow-[0_2px_9px_rgba(45,35,75,0.025)]">
                    <div class="flex gap-1 overflow-x-auto border-b border-[#eeecf3] px-3 pt-3 sm:px-5">
                        @foreach ($campaigns as $campaign)
                            <button type="button" @class([
                                'flex shrink-0 items-center gap-2 border-b-2 px-3 py-3 text-[10px] font-semibold transition sm:px-4',
                                'border-[#6941bd] text-[#514d64]' => $campaign['active'],
                                'border-transparent text-[#898598] hover:text-[#514d64]' => ! $campaign['active'],
                            ]) aria-pressed="{{ $campaign['active'] ? 'true' : 'false' }}">
                                {{ $campaign['name'] }}
                                <span @class([
                                    'rounded-full px-2 py-0.5 text-[8px]',
                                    'bg-[#eaf8f1] text-[#21825a]' => $campaign['status'] === 'En vivo',
                                    'bg-[#f2f0f7] text-[#777387]' => $campaign['status'] !== 'En vivo',
                                ])>{{ $campaign['status'] }}</span>
                            </button>
                        @endforeach
                        <button type="button" aria-label="Añadir campaña" class="shrink-0 px-3 text-lg text-[#777387] hover:text-[#6941bd]">+</button>
                    </div>

                    <div class="p-4 sm:p-5">
                        <div class="mb-5 flex flex-col justify-between gap-3 rounded-lg border border-[#e8e1f5] bg-[#f7f3ff] p-3.5 sm:flex-row sm:items-center">
                            <div class="flex items-start gap-3">
                                <span class="flex size-8 shrink-0 items-center justify-center rounded-md bg-[#6941bd] text-white" aria-hidden="true">✦</span>
                                <div>
                                    <p class="text-xs font-bold text-[#49415e]">La campaña está en progreso, participa y gana recompensas</p>
                                    <p class="mt-1 text-[10px] leading-4 text-[#777087]">Los jugadores pueden participar por premios hasta agotar las unidades disponibles.</p>
                                </div>
                            </div>
                            <span class="inline-flex shrink-0 items-center gap-1.5 text-[9px] font-semibold text-[#21825a]"><span class="size-1.5 rounded-full bg-[#28aa75]"></span> Última actualización · hace 2 min</span>
                        </div>

                        <div class="grid items-start gap-4 xl:grid-cols-2">
                            <section class="rounded-lg border border-[#eeecf3] p-4">
                                <div class="mb-4 flex items-center justify-between gap-2">
                                    <h2 class="font-display text-sm font-bold text-[#39354d]">Fechas &amp; Horarios de Actividad</h2>
                                    <span class="rounded-full bg-[#f2edff] px-2 py-1 text-[8px] font-semibold text-[#6941bd]">Zona horaria: Madrid</span>
                                </div>
                                <div class="grid gap-3 sm:grid-cols-2">
                                    <x-input name="starts_at" label="Fecha de inicio de campaña" type="datetime-local" value="2025-05-01T00:00" />
                                    <x-input name="ends_at" label="Fecha de fin de campaña" type="datetime-local" value="2025-05-31T23:59" />
                                </div>
                                <fieldset class="mt-4">
                                    <legend class="mb-2 text-[10px] font-semibold text-[#625e73]">Ventanas por día de actividad</legend>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach ([['lunes', 'Lun'], ['martes', 'Mar'], ['miercoles', 'Mié'], ['jueves', 'Jue'], ['viernes', 'Vie'], ['sabado', 'Sáb'], ['domingo', 'Dom']] as [$day, $shortDay])
                                            <label class="flex cursor-pointer items-center gap-1.5 rounded-md border border-[#ebe8f2] px-2 py-1.5 text-[9px] font-medium text-[#625e73] has-[:checked]:border-[#8e68dc] has-[:checked]:bg-[#f2edff] has-[:checked]:text-[#6941bd]">
                                                <input type="checkbox" name="schedule_days[]" value="{{ $day }}" @checked(in_array($day, $scheduleDays)) class="sr-only">
                                                {{ $shortDay }}
                                            </label>
                                        @endforeach
                                    </div>
                                    @error('schedule_days')
                                        <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                                    @enderror
                                </fieldset>
                                <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                    <x-input name="daily_start" label="Hora de inicio" type="time" value="10:00" />
                                    <x-input name="daily_end" label="Hora de cierre" type="time" value="22:00" />
                                </div>
                                <label class="mt-4 flex items-start gap-2.5 rounded-lg bg-[#f7f5fc] p-3 text-[10px] leading-4 text-[#625e73]">
                                    <input type="checkbox" name="notify_schedule" value="1" @checked(old('notify_schedule', true)) class="mt-0.5 size-4 accent-[#5524c7]">
                                    <span><span class="block font-semibold text-[#49465b]">Enviar campaña automáticamente</span>Activar la campaña en las fechas y horas seleccionadas.</span>
                                </label>
                            </section>

                            <section class="rounded-lg border border-[#eeecf3] p-4">
                                <div class="mb-4 flex flex-wrap items-center justify-between gap-2">
                                    <h2 class="font-display text-sm font-bold text-[#39354d]">Premios e Incentivos del Minijuego</h2>
                                    <span class="rounded-full bg-[#eaf8f1] px-2 py-1 text-[8px] font-semibold text-[#21825a]">Inventario de premios sincronizado</span>
                                </div>
                                <div class="grid gap-3 sm:grid-cols-[minmax(0,1fr)_120px]">
                                    <div>
                                        <label for="reward_type" class="mb-1.5 block text-[10px] font-semibold text-[#49465b]">Tipo de recompensa asignada</label>
                                        <select id="reward_type" name="reward_type" class="w-full rounded-lg border border-[#e8e6ef] bg-white px-3 py-2.5 text-xs text-[#514d64] outline-none focus:border-violet-500 focus:ring-4 focus:ring-violet-100">
                                            @foreach (['discount' => 'Cupón de descuento (15%)', 'free_item' => 'Producto gratis', 'points' => 'Puntos de fidelización'] as $value => $label)
                                                <option value="{{ $value }}" @selected(old('reward_type', 'discount') === $value)>{{ $label }}</option>
                                            @endforeach
                                        </select>
                                        @error('reward_type')
                                            <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <x-input name="reward_units" label="Unidades disponibles" type="number" min="0" value="2500" />
                                </div>

                                <div class="mt-4 rounded-lg bg-[#f7f5fc] p-3.5">
                                    <div class="flex items-center justify-between gap-2">
                                        <div><h3 class="text-[10px] font-bold text-[#514d64]">Coste total de cupones autorizados</h3><p class="mt-1 text-[9px] text-[#9692a4]">Presupuesto máximo aprobado</p></div>
                                        <span class="font-display text-sm font-bold text-[#39354d]">${{ number_format(old('reward_budget', 50000)) }} <span class="text-[9px] font-medium text-[#898598]">/ mes</span></span>
                                    </div>
                                    <input type="range" name="reward_budget" min="0" max="100000" value="{{ old('reward_budget', 50000) }}" class="mt-3 w-full accent-[#5524c7]" aria-label="Presupuesto mensual de recompensas">
                                    <div class="flex justify-between text-[8px] text-[#9692a4]"><span>$0</span><span>Presupuesto comprometido: $32,450</span><span>$100,000</span></div>
                                    @error('reward_budget')
                                        <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4 grid gap-3 sm:grid-cols-[minmax(0,1fr)_120px] sm:items-end">
                                    <x-input name="minimum_score" label="Puntuación mínima para ganar" type="number" min="0" value="2500" />
                                    <p class="pb-2 text-[9px] text-[#858195]">Puntos por partida</p>
                                </div>

                                <div class="mt-4 overflow-hidden rounded-lg bg-[#1c1930] p-3 text-white">
                                    <div class="flex flex-col items-start justify-between gap-3 sm:flex-row sm:items-center">
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('images/whopper-game-preview.png') }}" alt="Vista previa del minijuego Whopper Catch" class="size-12 shrink-0 rounded-md bg-[#38334f] object-cover" onerror="this.hidden=true; this.nextElementSibling.hidden=false">
                                            <span hidden class="flex size-12 shrink-0 items-center justify-center rounded-md bg-[#38334f] text-lg text-[#f5c94c]">★</span>
                                            <div><p class="text-[10px] font-bold">Whopper Catch · Preview</p><p class="mt-1 text-[9px] text-[#c8c3d7]">Recompensa activa: Whopper gratis</p></div>
                                        </div>
                                        <span class="rounded-md bg-[#5524c7] px-3 py-2 text-[9px] font-semibold">Vista previa</span>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="flex flex-col justify-between gap-3 border-t border-[#eeecf3] pt-4 sm:flex-row sm:items-center">
                            <p class="text-[9px] text-[#9692a4]">Los cambios se guardarán en el perfil de empresa y en la campaña seleccionada.</p>
                            <div class="flex flex-wrap gap-2">
                                <x-button variant="secondary" type="button">Previsualizar en simulador</x-button>
                                <x-button type="submit">
                                    Aplicar cambios
                                    <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </x-button>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </main>
</div>
@endsection