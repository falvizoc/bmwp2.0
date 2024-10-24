<x-app-layout>
    {{-- SECCIÓN HERO --}}
    <section class="relative h-full min-h-screen bg-no-repeat bg-center bg-cover bg-fixed" style="background-image: url('{{ asset('img/hero/automatizacion.png') }}')">
        <div class="absolute z-30 inset-0 max-w-7xl mx-auto px-4 md:px-12 py-20 2xl:py-28 mt-10">
            <h1 class="text-white text-4xl md:text-5xl 2xl:text-6xl mb-4">
                Automatización Inteligente
            </h1>
            <h2 class="tracking-wide text-2xl md:text-3xl 2xl:text-4xl text-white max-w-md md:max-w-3xl mb-8 font-light">
                Moderniza tus espacios con sistemas de automatización de vanguardia
            </h2>
            <a href="#" class="text-white text-sm md:text-base tracking-tight bg-red-600 px-5 py-3 h-14 rounded-full hover:bg-red-700 focus:bg-red-600 focus:ring-4 focus:ring-red-400 transition duration-200">
                Solicita una cotización
            </a>
        </div>
        <div class="absolute inset-0 bg-black/50 -z-0"></div>

        <div class="hidden lg:block text-center absolute bottom-20 left-1/2 z-30">
            <a href="#ventajas" tabindex="0" class="cursor-pointer inline-block shadow-md animate-updown rounded-full h-12 w-12 bg-blue-100 bg-opacity-20 text-gray-300 text-center hover:bg-primary duration-500">
              <i class="fa fa-angle-down text-3xl pt-2"></i>
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
                            Eficiencia y Confort Automatizados
                        </h2>
                        <p class="max-w-2xl text-base md:text-2xl text-gray-700 font-light">
                            Control Total a tu Alcance
                        </p>
                    </div>
                    <div class="relative max-w-md lg:max-w-3xl">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Gestión Eficiente -->
                            <div class="">
                                <a class="group block h-auto xl:h-128 p-8 border border-green-500 border-opacity-30 hover:border-opacity-100 rounded-3xl transition duration-200" href="#">
                                    <div class="flex h-full flex-col items-start">
                                        <i class="fas fa-tasks text-green-500 text-3xl mb-6"></i> <!-- Icono de gestión -->
                                        <div class="mt-auto max-w-xs">
                                            <h4 class="text-xl sm:text-2xl mb-2 text-black">
                                                Gestión Eficiente
                                            </h4>
                                            <p class="text-gray-500 tracking-tight leading-5">
                                                Automatiza tareas repetitivas y mejora la eficiencia de tus operaciones.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Ahorro Energético -->
                            <div class="">
                                <a class="group block h-auto xl:h-128 p-8 border border-green-500 border-opacity-30 hover:border-opacity-100 rounded-3xl transition duration-200" href="#">
                                    <div class="flex h-full flex-col items-start">
                                        <i class="fas fa-leaf text-green-500 text-3xl mb-6"></i> <!-- Icono de ahorro energético -->
                                        <div class="mt-auto max-w-xs">
                                            <h4 class="text-xl sm:text-2xl mb-2 text-black">
                                                Ahorro Energético
                                            </h4>
                                            <p class="text-gray-500 tracking-tight leading-5">
                                                Reduce el consumo energético con soluciones automatizadas y sostenibles.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Operación Intuitiva -->
                            <div class="">
                                <a class="group block h-auto xl:h-128 p-8 border border-green-500 border-opacity-30 hover:border-opacity-100 rounded-3xl transition duration-200" href="#">
                                    <div class="flex h-full flex-col items-start">
                                        <i class="fas fa-cogs text-green-500 text-3xl mb-6"></i> <!-- Icono de operación intuitiva -->
                                        <div class="mt-auto max-w-xs">
                                            <h4 class="text-xl sm:text-2xl mb-2 text-black">
                                                Operación Intuitiva
                                            </h4>
                                            <p class="text-gray-500 tracking-tight leading-5">
                                                Interfaz amigable que permite un control completo y simplificado de tus procesos.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="h-80 md:h-96 object-cover object-center" src="{{ asset('img/beneficios/automatizacion.jpg') }}" alt="Sistemas de Automatización">
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
                En alianza con los principales fabricantes de soluciones de automatización.
            </h4>
            <div class="flex space-x-12 md:space-x-20 items-center justify-center">
                <img class="h-12 md:h-16 object-cover object-center" src="{{asset('img/partners/logo-1.png')}}" alt="">
                <img class="h-10 md:h-14 object-cover object-center" src="{{asset('img/partners/logo-3.png')}}" alt="">
                <img class="h-12 md:h-16 object-cover object-center" src="{{asset('img/partners/logo-5.png')}}" alt="">
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