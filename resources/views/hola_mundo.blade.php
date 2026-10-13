<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Hola Mundo! | Laravel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#FF2D20',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-pulse-glow {
            animation: pulseGlow 4s ease-in-out infinite alternate;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(1deg); }
        }
        @keyframes pulseGlow {
            0% { opacity: 0.4; filter: blur(40px); }
            100% { opacity: 0.7; filter: blur(60px); }
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center relative overflow-hidden bg-grid-pattern">

    <!-- Ambient Glowing Background Elements -->
    <div class="absolute top-1/4 -left-20 w-96 h-96 bg-red-600/30 rounded-full animate-pulse-glow"></div>
    <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-indigo-600/30 rounded-full animate-pulse-glow" style="animation-delay: 2s;"></div>

    <!-- Container Card -->
    <main class="relative z-10 w-full max-w-xl mx-4 p-8 sm:p-12 rounded-3xl bg-slate-900/60 border border-slate-800 backdrop-blur-xl shadow-2xl shadow-slate-950/50 animate-float text-center">
        
        <!-- Laravel Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-semibold uppercase tracking-wider mb-8">
            <svg class="w-4 h-4 text-laravel" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21.5 6.3l-9-5.2c-.3-.2-.7-.2-1 0l-9 5.2c-.3.2-.5.5-.5.9v10.4c0 .4.2.7.5.9l9 5.2c.1.1.3.1.5.1s.4 0 .5-.1l9-5.2c.3-.2.5-.5.5-.9V7.2c0-.4-.2-.7-.5-.9zM12 3.1l6.9 4-3 1.7-6.9-4L12 3.1zm-8 4.6l7 4v8.1l-7-4V7.7zm9 12.1v-8.1l7-4v8.1l-7 4z"/>
            </svg>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }}
        </div>

        <!-- Title -->
        <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-white mb-4">
            ¡Hola, <span class="bg-gradient-to-r from-red-500 via-orange-400 to-amber-300 bg-clip-text text-transparent">Mundo!</span>
        </h1>

        <!-- Description -->
        <p class="text-slate-400 text-base sm:text-lg mb-8 leading-relaxed">
            Bienvenido a tu aplicación Laravel recién configurada. El controlador y la ruta han sido conectados exitosamente.
        </p>

        <!-- Feature Cards / Tech Stack Badges -->
        <div class="grid grid-cols-3 gap-3 mb-8">
            <div class="p-3 rounded-xl bg-slate-800/40 border border-slate-700/50 flex flex-col items-center">
                <span class="text-xs text-slate-400 mb-1">Ruta</span>
                <span class="text-sm font-semibold text-emerald-400">/</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-800/40 border border-slate-700/50 flex flex-col items-center">
                <span class="text-xs text-slate-400 mb-1">Controlador</span>
                <span class="text-sm font-semibold text-indigo-400">HolaMundo</span>
            </div>
            <div class="p-3 rounded-xl bg-slate-800/40 border border-slate-700/50 flex flex-col items-center">
                <span class="text-xs text-slate-400 mb-1">Vista</span>
                <span class="text-sm font-semibold text-amber-400">hola_mundo</span>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="pt-6 border-t border-slate-800/80 flex justify-between items-center text-xs text-slate-500">
            <span>PHP v{{ PHP_VERSION }}</span>
            <span class="flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Servidor listo
            </span>
        </div>
    </main>

</body>
</html>
