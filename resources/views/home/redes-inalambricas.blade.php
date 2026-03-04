<x-app-layout>
    @section('title', 'Redes WiFi Empresariales en ' . $geoLabel . ' | Bitmovil')
    @section('description', 'Diseño, instalación y configuración de redes WiFi y LAN empresariales con equipos Fortinet en ' . $geoLabel . '. Cotiza hoy.')
    @section('og_title', 'Redes WiFi Empresariales en ' . $geoLabel . ' | Bitmovil')

    {{-- SECCIÓN HERO --}}
    <section class="relative min-h-[50vh] flex items-center bg-gradient-to-br from-[#0A4C98] via-[#073B74] to-[#1a1a2e]">
        <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-12 py-16 w-full">
            <h1 class="text-white text-3xl md:text-5xl 2xl:text-6xl mb-4">
                Redes WiFi Empresariales en {{ $geoLabel }}
            </h1>
            <h2 class="tracking-wide text-xl md:text-3xl 2xl:text-4xl text-white max-w-md md:max-w-3xl mb-8 font-light">
                Amplía tu red con soluciones inalámbricas eficientes y seguras
            </h2>
            <div class="flex flex-wrap gap-3 mb-8 text-sm text-white/80">
                <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Fortinet Partner</span>
                <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> +200 clientes</span>
                <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Respuesta &lt;2h</span>
            </div>
            <a href="/contacto" class="text-white text-sm md:text-base tracking-tight btn-primary bg-green-500 px-6 py-3 rounded-full hover:bg-green-600 transition duration-200">
                Solicita una cotización
            </a>
        </div>
        </div>
    </section>
    
    {{-- SECCIÓN PARTNERS --}}
    <section class="bg-gray-100">
        <div class="py-8 lg:py-16 mx-auto px-4">
            <h3 class="mb-4 lg:mb-6 text-4xl md:text-5xl tracking-wide leading-tight text-center text-primary">
                Partners
            </h3>
            <h4 class="text-xl md:text-3xl font-light text-gray-800 text-center mb-10">
                En alianza con los principales fabricantes de soluciones inalámbricas.
            </h4>
            <div class="flex space-x-12 md:space-x-20 items-center justify-center">
                <img class="h-12 md:h-16 object-cover object-center" src="{{asset('img/partners/logo-1.png')}}" alt="Microsoft">
                <img class="h-10 md:h-14 object-cover object-center" src="{{asset('img/partners/logo-3.png')}}" alt="Dell Technologies">
                <img class="h-12 md:h-16 object-cover object-center" src="{{asset('img/partners/logo-5.png')}}" alt="Fortinet">
            </div>
        </div>
    </section>
    
    {{-- Leasing --}}
    <x-leasing />
    
    {{-- Por que elegir a Bitmovil --}}
    <x-porque-elegir-bitmovil />

    {{-- Reseñas --}}
    @livewire('reseñas-component', key('reseñas-component'))

    {{-- Hablemos --}}
    <x-hablemos />

    {{-- Preguntas Frecuentes - Equipos --}}
    @livewire('preguntas-frecuentes-component', ['page_id' => 14], key('preguntas-frecuentes-component'))

</x-app-layout>
