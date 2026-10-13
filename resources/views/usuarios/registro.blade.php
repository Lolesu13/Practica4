@extends('layouts.app')

@section('title', 'Alta de personal')

@section('content')
<div class="min-h-screen lg:flex">
    <aside class="flex w-full shrink-0 flex-col border-b border-[#eae8f1] bg-white px-4 py-4 lg:min-h-screen lg:w-60 lg:border-b-0 lg:border-r lg:px-5 lg:py-6">
        <a href="{{ url('/') }}" class="mb-6 flex items-center gap-2.5 text-sm font-extrabold text-[#29253b] lg:mb-8">
            <span class="flex size-8 items-center justify-center rounded-lg bg-[#5524c7] text-white">
                <svg viewBox="0 0 24 24" class="size-5" fill="none" aria-hidden="true"><path d="M5 17.5 9.2 6.8a1 1 0 0 1 1.86 0l1.15 2.93 1.1-2.93a1 1 0 0 1 1.87 0L19 17.5M7 13h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <span>PlayMetrics <span class="block text-[10px] font-medium text-[#918da3]">Engagement Platform</span></span>
        </a>

        <x-button class="w-full" type="button">
            <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M10 4v12M4 10h12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            Nueva Actividad
        </x-button>

        <nav aria-label="Navegación principal" class="mt-5 grid grid-cols-2 gap-1 sm:grid-cols-3 lg:flex lg:flex-col">
            @foreach ([['Panel General', '▦'], ['Campañas', '◈'], ['Integraciones', '⌘'], ['Auditoría', '◷'], ['Analítica', '▥'], ['Configuración', '⚙']] as [$item, $icon])
                <a href="#" @class([
                    'flex items-center gap-3 rounded-lg px-3 py-2.5 text-xs font-semibold transition',
                    'bg-[#5524c7] text-white shadow-sm' => $item === 'Configuración',
                    'text-[#77738a] hover:bg-[#f5f3fa] hover:text-[#39354d]' => $item !== 'Configuración',
                ])>
                    <span class="w-4 text-center text-sm" aria-hidden="true">{{ $icon }}</span>
                    {{ $item }}
                </a>
            @endforeach
        </nav>

        <div class="mt-auto hidden border-t border-[#eeecf3] pt-4 text-xs text-[#77738a] lg:block">
            <a href="#" class="block py-2">Centro de ayuda</a>
            <a href="#" class="block py-2">Cerrar sesión</a>
        </div>
    </aside>

    <main class="min-w-0 flex-1">
        <header class="flex flex-wrap items-center justify-between gap-3 border-b border-[#eae8f1] bg-white px-4 py-3 sm:px-7 lg:px-9">
            <div class="flex min-w-0 flex-1 items-center gap-4">
                <label class="relative hidden max-w-sm flex-1 sm:block">
                    <span class="sr-only">Buscar</span>
                    <svg viewBox="0 0 20 20" class="absolute left-3 top-1/2 size-4 -translate-y-1/2 text-[#a19daf]" fill="none" aria-hidden="true"><circle cx="8.8" cy="8.8" r="5.8" stroke="currentColor" stroke-width="1.5"/><path d="m13 13 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                    <input type="search" placeholder="Buscar por nombre, correo o rol..." class="w-full rounded-lg border border-[#eeecf3] bg-[#fbfafd] py-2 pl-9 pr-3 text-xs outline-none placeholder:text-[#aaa7b5] focus:border-violet-400">
                </label>
                <p class="truncate text-[11px] text-[#9692a4]">Configuración <span class="px-1.5">/</span> Seguridad y cumplimiento <span class="px-1.5">/</span> <span class="font-semibold text-[#514d64]">Gestión de personal</span></p>
            </div>
            <div class="flex items-center gap-3">
                <span class="hidden text-xs font-medium text-[#6f6b80] md:inline">Soporte</span>
                <span class="hidden rounded-md bg-[#f4f2fa] px-2.5 py-1.5 text-[10px] font-semibold text-[#68647a] sm:inline">Empresa: PlayMetrics</span>
                <span class="flex size-8 items-center justify-center rounded-full bg-[#e8ddff] text-xs font-bold text-[#5524c7]" aria-label="Perfil de usuario">AM</span>
            </div>
        </header>

        <div class="mx-auto max-w-[1480px] px-4 py-6 sm:px-7 sm:py-8 lg:px-9">
            <section class="mb-6 grid gap-4 rounded-xl border border-[#ebe8f2] bg-white p-5 shadow-[0_2px_10px_rgba(45,35,75,0.03)] sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center sm:p-6">
                <div>
                    <p class="mb-2 text-[10px] font-bold uppercase tracking-[0.12em] text-[#7b59ce]">Administración de equipo</p>
                    <h1 class="font-display text-2xl font-bold text-[#29253b] sm:text-[28px]">Gestión de Personal &amp; Equipos Internos</h1>
                    <p class="mt-2 max-w-2xl text-sm leading-6 text-[#79758a]">Invita y gestiona a los colaboradores que ayudan a administrar campañas, datos y premios de la plataforma de engagement.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-2 rounded-lg bg-[#effaf5] px-3 py-2 text-xs font-semibold text-[#20835b]"><span class="size-2 rounded-full bg-[#28aa75]"></span> Seguridad operacional</span>
                    <span class="inline-flex items-center gap-2 rounded-lg border border-[#eeecf3] px-3 py-2 text-xs font-semibold text-[#69657a]">14 usuarios activos</span>
                </div>
            </section>

            @if (session('status'))
                <div role="status" class="mb-5 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">{{ session('status') }}</div>
            @endif

            <div class="grid items-start gap-5 xl:grid-cols-[minmax(0,1.55fr)_minmax(320px,0.9fr)]">
                <section class="rounded-xl border border-[#ebe8f2] bg-white p-5 shadow-[0_2px_10px_rgba(45,35,75,0.03)] sm:p-6">
                    <div class="mb-5 flex flex-wrap items-start justify-between gap-3 border-b border-[#f0eef5] pb-4">
                        <div>
                            <h2 class="font-display text-base font-bold text-[#302c43]">Alta de Nuevo Miembro de Equipo</h2>
                            <p class="mt-1 text-xs text-[#9692a4]">Completa los datos para crear una cuenta interna.</p>
                        </div>
                        <span class="rounded-full bg-[#f1eaff] px-2.5 py-1 text-[10px] font-semibold text-[#6941bd]">Paso 1 de 2 · Credenciales</span>
                    </div>

                    <form action="{{ route('usuarios.registro') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2">
                            <x-input name="nombre" label="Nombre completo" placeholder="Ej. Ana" autocomplete="given-name" />
                            <x-input name="apellido" label="Apellido" placeholder="Ej. Morales" autocomplete="family-name" />
                        </div>

                        <x-input name="email" label="Correo electrónico corporativo" type="email" placeholder="nombre@empresa.com" autocomplete="email" />

                        <div>
                            <label for="area" class="mb-1.5 block text-xs font-semibold text-[#49465b]">Departamento / Área asignada <span class="text-rose-500">*</span></label>
                            <select id="area" name="area" class="w-full rounded-lg border border-[#e8e6ef] bg-white px-3.5 py-2.5 text-sm text-[#514d64] outline-none focus:border-violet-500 focus:ring-4 focus:ring-violet-100">
                                <option value="" disabled @selected(old('area') === null)>Selecciona un departamento</option>
                                @foreach (['Operaciones', 'Marketing', 'Analítica', 'Soporte', 'Administración'] as $area)
                                    <option value="{{ $area }}" @selected(old('area') === $area)>{{ $area }}</option>
                                @endforeach
                            </select>
                            @error('area')
                                <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <fieldset>
                            <div class="mb-3 flex items-center justify-between gap-3">
                                <legend class="text-xs font-semibold text-[#49465b]">Selección de Rol Institucional <span class="text-rose-500">*</span></legend>
                                <span class="text-[10px] font-semibold text-[#7b59ce]">+ Roles personalizados</span>
                            </div>
                            <div class="grid gap-2.5 sm:grid-cols-2">
                                @php
                                    $roles = [
                                        ['supervisor', 'Super Administrador', 'Acceso total a la plataforma y configuración.', '◆'],
                                        ['campaign_manager', 'Campaign Manager', 'Crea y administra campañas y premios.', '▣'],
                                        ['data_analyst', 'Analista de Datos', 'Consulta métricas e informes de campañas.', '▤'],
                                        ['support_operator', 'Operador de Soporte', 'Gestiona consultas y asistencia a usuarios.', '◉'],
                                    ];
                                @endphp
                                @foreach ($roles as [$value, $label, $description, $icon])
                                    <label @class([
                                        'flex cursor-pointer gap-3 rounded-lg border p-3 transition hover:border-violet-300',
                                        'border-[#8e68dc] bg-[#faf7ff] ring-1 ring-[#8e68dc]' => old('role') === $value,
                                        'border-[#ebe8f2] bg-white' => old('role') !== $value,
                                    ])>
                                        <input type="radio" name="role" value="{{ $value }}" @checked(old('role') === $value) class="mt-0.5 size-4 accent-[#5524c7]">
                                        <span class="flex size-8 shrink-0 items-center justify-center rounded-md bg-[#f0eaff] text-sm font-bold text-[#6941bd]">{{ $icon }}</span>
                                        <span class="min-w-0">
                                            <span class="block text-xs font-bold text-[#39354d]">{{ $label }}</span>
                                            <span class="mt-1 block text-[10px] leading-4 text-[#898598]">{{ $description }}</span>
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                            @error('role')
                                <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <fieldset class="space-y-2.5">
                            <legend class="mb-2 text-xs font-semibold text-[#49465b]">Permisos granulares excepcionales</legend>
                            @foreach ([['manage_campaigns', 'Modificar reglas de premios y campañas', 'Permite cambiar reglas, presupuestos y fechas.'], ['export_data', 'Descargar datos de engagement', 'Exportación de informes y datos de usuarios.'], ['manage_team', 'Gestionar miembros del equipo', 'Invitar y editar cuentas internas.']] as [$permission, $label, $description])
                                <label class="flex items-center justify-between gap-3 rounded-lg border border-[#efedf4] px-3.5 py-3">
                                    <span class="flex min-w-0 items-start gap-2.5">
                                        <input type="checkbox" name="permissions[]" value="{{ $permission }}" @checked(in_array($permission, old('permissions', []))) class="mt-0.5 size-4 rounded accent-[#5524c7]">
                                        <span><span class="block text-xs font-semibold text-[#514d64]">{{ $label }}</span><span class="mt-1 block text-[10px] leading-4 text-[#9692a4]">{{ $description }}</span></span>
                                    </span>
                                    <span class="shrink-0 rounded-full bg-[#f3f1f7] px-2 py-1 text-[9px] font-semibold text-[#77738a]">Opcional</span>
                                </label>
                            @endforeach
                        </fieldset>

                        <div class="flex flex-wrap items-center justify-between gap-3 border-t border-[#f0eef5] pt-4">
                            <p class="max-w-sm text-[10px] leading-4 text-[#9692a4]">Se enviará una invitación al correo corporativo para completar el acceso.</p>
                            <div class="flex gap-2">
                                <x-button variant="secondary">Cancelar</x-button>
                                <x-button type="submit">
                                    Crear cuenta
                                    <svg viewBox="0 0 20 20" class="size-4" fill="none" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </x-button>
                            </div>
                        </div>
                    </form>
                </section>

                <div class="space-y-5">
                    <section class="rounded-xl border border-[#ebe8f2] bg-white p-5 shadow-[0_2px_10px_rgba(45,35,75,0.03)] sm:p-6">
                        <div class="mb-4 flex items-center justify-between gap-3">
                            <div>
                                <h2 class="font-display text-sm font-bold text-[#302c43]">Protocolo de Seguridad Institucional</h2>
                                <p class="mt-1 text-[10px] text-[#9692a4]">Estado de las políticas de acceso</p>
                            </div>
                            <span class="rounded-full bg-[#effaf5] px-2.5 py-1 text-[10px] font-semibold text-[#20835b]">Cumplimiento</span>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="rounded-lg bg-[#faf9fc] p-3.5">
                                <p class="text-[10px] font-medium text-[#898598]">Autenticación de dos factores</p>
                                <p class="mt-2 text-xl font-bold text-[#302c43]">100<span class="text-sm">%</span></p>
                                <div class="mt-2 h-1.5 overflow-hidden rounded-full bg-[#e9e5f1]"><div class="h-full w-full rounded-full bg-[#2ba775]"></div></div>
                            </div>
                            <div class="rounded-lg bg-[#faf9fc] p-3.5">
                                <p class="text-[10px] font-medium text-[#898598]">Sesiones sospechosas</p>
                                <p class="mt-2 text-xl font-bold text-[#302c43]">0 <span class="text-xs font-medium text-[#898598]">en 30 días</span></p>
                                <p class="mt-2 text-[9px] text-[#20835b]">Sin alertas pendientes</p>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-xl border border-[#ebe8f2] bg-white p-5 shadow-[0_2px_10px_rgba(45,35,75,0.03)] sm:p-6">
                        <div class="mb-4 flex items-center justify-between gap-2">
                            <div>
                                <h2 class="font-display text-sm font-bold text-[#302c43]">Personal Activo &amp; Colaboradores</h2>
                                <p class="mt-1 text-[10px] text-[#9692a4]">Equipo con acceso a la plataforma</p>
                            </div>
                            <button type="button" aria-label="Opciones del equipo" class="rounded-md p-2 text-[#858195] hover:bg-[#f5f3fa]">•••</button>
                        </div>
                        @php
                            $members = [
                                ['Ana Morales', 'Administradora', 'Activo', 'avatar-ana-morales.jpg', 'AM'],
                                ['Diego Castro', 'Campaign Manager', 'Activo', 'avatar-diego-castro.jpg', 'DC'],
                                ['Camila Ruiz', 'Analista de Datos', 'Activo', 'avatar-camila-ruiz.jpg', 'CR'],
                                ['Lucía Torres', 'Operadora de Soporte', 'Invitación pendiente', 'avatar-lucia-torres.jpg', 'LT'],
                                ['Marco Vega', 'Campaign Manager', 'Activo', 'avatar-marco-vega.jpg', 'MV'],
                            ];
                        @endphp
                        <ul class="divide-y divide-[#f1eff5]">
                            @foreach ($members as [$name, $role, $status, $image, $initials])
                                <li class="flex items-center gap-3 py-3 first:pt-0 last:pb-0">
                                    <img src="{{ asset('images/' . $image) }}" alt="Foto de {{ $name }}" class="size-9 shrink-0 rounded-full bg-[#eee9f7] object-cover" onerror="this.hidden=true; this.nextElementSibling.hidden=false">
                                    <span hidden class="flex size-9 shrink-0 items-center justify-center rounded-full bg-[#eee9f7] text-[10px] font-bold text-[#6941bd]">{{ $initials }}</span>
                                    <span class="min-w-0 flex-1"><span class="block truncate text-xs font-semibold text-[#49465b]">{{ $name }}</span><span class="mt-1 block truncate text-[10px] text-[#9692a4]">{{ $role }}</span></span>
                                    <span @class([
                                        'rounded-full px-2 py-1 text-[9px] font-semibold',
                                        'bg-[#effaf5] text-[#20835b]' => $status === 'Activo',
                                        'bg-[#fff6e5] text-[#a26b12]' => $status !== 'Activo',
                                    ])>{{ $status }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="#" class="mt-4 block border-t border-[#f1eff5] pt-3 text-center text-[10px] font-semibold text-[#6941bd]">Ver todos los miembros <span aria-hidden="true">→</span></a>
                    </section>

                    <aside class="rounded-xl bg-[#5524c7] p-5 text-white shadow-sm">
                        <div class="flex gap-3">
                            <span class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-white/15">
                                <svg viewBox="0 0 20 20" class="size-5" fill="none" aria-hidden="true"><path d="M10 2.5 4 5v4.3c0 3.6 2.5 6.7 6 8.2 3.5-1.5 6-4.6 6-8.2V5l-6-2.5Z" stroke="currentColor" stroke-width="1.4"/><path d="m7.5 9.8 1.7 1.7 3.5-3.7" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            <div>
                                <h2 class="text-xs font-bold">Auditoría Obligatoria Inviolable</h2>
                                <p class="mt-1 text-[10px] leading-4 text-violet-100">Toda alta o cambio de permisos queda registrado para mantener la trazabilidad del equipo.</p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection