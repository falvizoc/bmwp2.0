<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- SEO: Title y Description --}}
        <title>@yield('title', 'Bitmovil — Soluciones TI en Tampico, Tamaulipas')</title>
        <meta name="description" content="@yield('description', 'Integramos tecnología para empresas del norte de México: redes, seguridad informática, licenciamiento Microsoft, Fortinet y más. Tampico, Tamaulipas.')">
        <meta name="robots" content="index, follow">

        {{-- Favicon --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/logos/favicon_192x192.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('img/logos/favicon_192x192.png') }}">

        {{-- Canonical --}}
        <link rel="canonical" href="{{ url()->current() }}">

        {{-- Open Graph --}}
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Bitmovil">
        <meta property="og:title" content="@yield('og_title', 'Bitmovil — Soluciones TI en Tampico, Tamaulipas')">
        <meta property="og:description" content="@yield('og_description', 'Integramos tecnología para empresas del norte de México: redes, seguridad informática, licenciamiento Microsoft, Fortinet y más.')">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="@yield('og_image', asset('img/logos/favicon_192x192.png'))">
        <meta property="og:locale" content="es_MX">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('og_title', 'Bitmovil — Soluciones TI en Tampico, Tamaulipas')">
        <meta name="twitter:description" content="@yield('og_description', 'Integramos tecnología para empresas del norte de México.')">
        <meta name="twitter:image" content="@yield('og_image', asset('img/logos/favicon_192x192.png'))">

        {{-- Schema.org: Organization + LocalBusiness --}}
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "Organization",
                    "@id": "https://bitmovil.mx/#organization",
                    "name": "Bitmovil Tecnologías",
                    "url": "https://bitmovil.mx",
                    "logo": "{{ asset('img/logos/favicon_192x192.png') }}",
                    "description": "Empresa de integración tecnológica con sede en Tampico, Tamaulipas. Soluciones de redes, seguridad informática, licenciamiento de software y más para empresas del norte de México.",
                    "foundingLocation": {
                        "@type": "Place",
                        "name": "Tampico, Tamaulipas, México"
                    },
                    "sameAs": [
                        "https://www.facebook.com/BitmovilMx",
                        "https://www.linkedin.com/company/bitmovil",
                        "https://www.instagram.com/bitmovil/"
                    ]
                },
                {
                    "@type": "LocalBusiness",
                    "@id": "https://bitmovil.mx/#localbusiness",
                    "name": "Bitmovil Tecnologías",
                    "url": "https://bitmovil.mx",
                    "telephone": "+52-833-227-2527",
                    "image": "{{ asset('img/logos/favicon_192x192.png') }}",
                    "description": "Empresa de integración tecnológica con sede en Tampico, Tamaulipas.",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Tampico",
                        "addressRegion": "Tamaulipas",
                        "addressCountry": "MX"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": "22.2551",
                        "longitude": "-97.8685"
                    },
                    "areaServed": {
                        "@type": "GeoCircle",
                        "geoMidpoint": {
                            "@type": "GeoCoordinates",
                            "latitude": "22.2551",
                            "longitude": "-97.8685"
                        },
                        "geoRadius": "300000"
                    },
                    "priceRange": "$$",
                    "openingHours": "Mo-Fr 09:00-18:00",
                    "sameAs": [
                        "https://www.facebook.com/BitmovilMx",
                        "https://www.linkedin.com/company/bitmovil"
                    ]
                }
            ]
        }
        </script>

        {{-- Schema adicional por página --}}
        @stack('schema')

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

        {{-- FontAwesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

        {{-- Scripts --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

        {{-- Google Analytics — reemplazar G-XXXXXXXXXX con el ID real --}}
        {{-- @if(app()->environment('production'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-XXXXXXXXXX');
        </script>
        @endif --}}

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-app')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @livewire('footer-app')
        </div>

        @stack('modals')

        @livewireScripts

        @stack('script')

    </body>
</html>
