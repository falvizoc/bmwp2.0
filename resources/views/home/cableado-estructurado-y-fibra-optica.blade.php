<x-app-layout>
    @section('title', 'Cableado Estructurado y Fibra Óptica en ' . $geoLabel . ' | Bitmovil')
    @section('description', 'Instalación de cableado estructurado categoría 6A y fibra óptica para empresas en ' . $geoLabel . '. Certificación de infraestructura TI. Cotiza hoy.')
    @section('og_title', 'Cableado Estructurado y Fibra Óptica en ' . $geoLabel . ' | Bitmovil')

    {{-- SECCIÓN HERO --}}
    <section class="relative min-h-[50vh] flex items-center bg-gradient-to-br from-[#073B74] via-[#0A4C98] to-[#00a1df]">
        <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-12 py-16 w-full">
            <h1 class="text-white text-3xl md:text-5xl 2xl:text-6xl mb-4">
                Cableado Estructurado y Fibra Óptica en {{ $geoLabel }}
            </h1>
            <h2 class="tracking-wide text-xl md:text-3xl 2xl:text-4xl text-white max-w-md md:max-w-3xl mb-4 font-light">
                Soluciones de cableado y fibra óptica para un rendimiento sin precedentes
            </h2>
            <div class="flex flex-wrap gap-3 mb-8 text-sm text-white/80">
                <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Fortinet Partner</span>
                <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> +200 clientes</span>
                <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Respuesta &lt;2h</span>
            </div>
            <a href="https://api.whatsapp.com/send?phone=5218332272527&text=Hola%20Bitmovil%2C%20requiero%20informaci%C3%B3n%20sobre%20Cableado%20Estructurado%20y%20Fibra%20%C3%93ptica."
               target="_blank" rel="nofollow"
               class="btn-primary inline-flex items-center gap-2 text-white text-sm md:text-base bg-green-500 hover:bg-green-600 px-6 py-3 rounded-full transition duration-200">
                <i class="fab fa-whatsapp text-lg"></i> Solicita una cotización
            </a>
        </div>
    </section>
    
    {{-- SECCIÓN BENEFICIOS --}}
    <section id="ventajas" class="relative py-10 md:py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="px-4 flex flex-col md:flex-row items-center justify-between">
                <div class="flex-1">
                    <div class="relative max-w-md lg:max-w-4xl mx-auto lg:mx-0 mb-8">
                        <h2 class="text-2xl md:text-4xl 2xl:text-5xl text-black tracking-wide mb-6 font-light">
                            Ventajas Clave de Nuestro Servicio
                        </h2>
                        <p class="max-w-2xl text-base md:text-2xl text-gray-700 font-light">
                            Conectividad, Velocidad y Seguridad en Todo Momento
                        </p>
                    </div>
                    <div class="relative max-w-md lg:max-w-3xl">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Fiabilidad y Escalabilidad -->
                            <div class="">
                                <a class="group block h-auto xl:h-128 p-8 border border-green-500 border-opacity-30 hover:border-opacity-100 rounded-3xl transition duration-200" href="#">
                                    <div class="flex h-full flex-col items-start">
                                        <i class="fas fa-network-wired text-green-500 text-3xl mb-6"></i> <!-- Icono de red -->
                                        <div class="mt-auto max-w-xs">
                                            <h4 class="text-xl sm:text-2xl mb-2 text-black">
                                                Fiabilidad y Escalabilidad
                                            </h4>
                                            <p class="text-gray-500 tracking-tight leading-5">
                                                Nuestro sistema de cableado asegura una transmisión de datos constante y confiable, incluso en entornos críticos.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Máxima Seguridad -->
                            <div class="">
                                <a class="group block h-auto xl:h-128 p-8 border border-green-500 border-opacity-30 hover:border-opacity-100 rounded-3xl transition duration-200" href="#">
                                    <div class="flex h-full flex-col items-start">
                                        <i class="fas fa-shield-alt text-green-500 text-3xl mb-6"></i> <!-- Icono de seguridad -->
                                        <div class="mt-auto max-w-xs">
                                            <h4 class="text-xl sm:text-2xl mb-2 text-black">
                                                Máxima Seguridad
                                            </h4>
                                            <p class="text-gray-500 tracking-tight leading-5">
                                                Soluciones de cableado con protección contra interferencias y medidas de seguridad para mantener tus datos a salvo.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Fácil Gestión -->
                            <div class="">
                                <a class="group block h-auto xl:h-128 p-8 border border-green-500 border-opacity-30 hover:border-opacity-100 rounded-3xl transition duration-200" href="#">
                                    <div class="flex h-full flex-col items-start">
                                        <i class="fas fa-project-diagram text-green-500 text-3xl mb-6"></i> <!-- Icono de administración -->
                                        <div class="mt-auto max-w-xs">
                                            <h4 class="text-xl sm:text-2xl mb-2 text-black">
                                                Fácil Gestión
                                            </h4>
                                            <p class="text-gray-500 tracking-tight leading-5">
                                                Diseño modular que facilita la identificación, gestión y resolución de problemas en el cableado estructurado.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="h-80 md:h-96 object-cover object-center" src="{{ asset('img/beneficios/cableado.jpg') }}" alt="Cableado Estructurado">
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
                En alianza con los fabricantes más importantes de la industria de conectividad.
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

    {{-- Hablemos  --}}
    <x-hablemos />

    {{-- Preguntas Frecuentes - Equipos --}}
    @livewire('preguntas-frecuentes-component', ['page_id' => 14], key('preguntas-frecuentes-component'))

</x-app-layout>
