<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow">

        <title>@yield('title', 'Bitmovil — Soluciones TI en Tampico, Tamaulipas')</title>
        <meta name="description" content="@yield('description', 'Integramos tecnología para empresas del norte de México.')">

        {{-- Favicon --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

        {{-- FontAwesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

        {{-- Scripts --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-white">

        {{-- Header mínimo --}}
        <header class="bg-[#0A4C98] py-3 px-4">
            <div class="max-w-5xl mx-auto flex items-center justify-between">
                <a href="/">
                    <img src="{{ asset('img/logos/logo-bitmovil-blanco.png') }}" class="h-8" alt="Logo Bitmovil">
                </a>
                <div class="flex items-center gap-4">
                    <a href="tel:+528332272527" class="hidden sm:inline text-white/80 hover:text-white text-sm">
                        ☎ (833) 227-2527
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil."
                       target="_blank" rel="nofollow"
                       class="inline-flex items-center gap-2 px-4 py-1.5 text-sm font-medium text-white bg-green-500 hover:bg-green-600 rounded-full transition">
                        <i class="fab fa-whatsapp"></i> Cotizar
                    </a>
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <main>
            @yield('content')
        </main>

        {{-- WA flotante --}}
        <a href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil."
           target="_blank" rel="nofollow" aria-label="WhatsApp"
           class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 rounded-full p-4 shadow-lg transition">
            <i class="fab fa-whatsapp text-white text-2xl"></i>
        </a>

        @stack('script')
    </body>
</html>
