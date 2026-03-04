<x-app-layout>
    @section('title', 'Integración TI para Empresas en ' . $geoLabel . ' | Bitmovil')
    @section('description', 'Empresa de tecnología en ' . $geoLabel . '. Integramos seguridad Fortinet, licencias Microsoft, videovigilancia y más. Cotiza hoy.')
    @section('og_title', 'Integración TI para Empresas en ' . $geoLabel . ' | Bitmovil')

    {{-- HERO ESTÁTICO --}}
    <section class="relative h-full min-h-[65vh] bg-no-repeat bg-center bg-cover"
             style="background-image: url('{{ asset('assets/img/carousel-ms.jpg') }}')">
        <div class="absolute inset-0 bg-black/60 -z-0"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-12 py-16 md:py-20 mt-10 h-full min-h-[65vh] flex items-center">
            <div class="grid md:grid-cols-5 gap-8 items-center w-full">

                {{-- Columna izquierda --}}
                <div class="col-span-5 md:col-span-3">
                    <p class="text-xs uppercase tracking-[0.2em] text-gray-400 mb-4">
                        Tampico · Tamaulipas · Norte de México
                    </p>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-white leading-tight tracking-wide mb-4">
                        Integración TI para Empresas en {{ $geoLabel }}.
                    </h1>
                    <div class="flex flex-wrap items-center gap-4 mb-6">
                        <img src="{{ asset('img/partners/logo-fortinet.svg') }}" class="h-5 grayscale opacity-70" alt="Fortinet Partner">
                        <img src="{{ asset('img/partners/logo-microsoft.png') }}" class="h-4 grayscale opacity-70" alt="Microsoft">
                        <img src="{{ asset('img/partners/logo-hp.png') }}" class="h-5 grayscale opacity-70" alt="HP">
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.link/bitmovil"
                           class="btn-primary inline-flex items-center justify-center gap-2 px-7 py-3.5 text-sm text-white bg-green-500 hover:bg-green-600 rounded-full transition duration-200">
                            <i class="fab fa-whatsapp text-xl"></i> Cotiza por WhatsApp
                        </a>
                        <a href="#propuesta"
                           class="inline-flex items-center justify-center gap-2 px-7 py-3.5 text-sm text-white border border-white/25 rounded-full hover:bg-white/10 transition duration-200">
                            Ver soluciones <i class="fa fa-angle-down text-xs"></i>
                        </a>
                    </div>
                </div>

                {{-- Columna derecha — Bento stats (solo desktop) --}}
                <div class="hidden md:grid col-span-2 grid-cols-2 gap-3">
                    <div class="bg-white/10 backdrop-blur rounded-xl p-5 flex flex-col items-center text-center">
                        <span class="text-3xl font-semibold text-white">+200</span>
                        <span class="text-xs text-white/70 mt-1 uppercase tracking-wide">Clientes</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur rounded-xl p-5 flex flex-col items-center text-center">
                        <span class="text-3xl font-semibold text-white">10+</span>
                        <span class="text-xs text-white/70 mt-1 uppercase tracking-wide">Años</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur rounded-xl p-5 col-span-2 flex flex-col items-center text-center">
                        <span class="text-sm font-medium text-green-400 uppercase tracking-wider">Fortinet Partner</span>
                        <span class="text-xs text-white/60 mt-1">Certified Network Security</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur rounded-xl p-5 flex flex-col items-center text-center">
                        <span class="text-3xl font-semibold text-white">24/7</span>
                        <span class="text-xs text-white/70 mt-1 uppercase tracking-wide">Soporte</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur rounded-xl p-5 flex flex-col items-center text-center">
                        <span class="text-3xl font-semibold text-white">+50</span>
                        <span class="text-xs text-white/70 mt-1 uppercase tracking-wide">Marcas</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

    {{-- Ingeniería nuestra propuesta de valor. --}}
    <div id="propuesta">
        <x-nuestra-propuesta />
    </div>

    <div class="py-10 md:py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <h3 class="text-2xl md:text-4xl font-regular text-primary mb-6 underline decoration-yellow-300 decoration-4">
                    Mercados verticales
                </h3>
                <h4 class="text-xl md:text-2xl font-light text-gray-800">
                    Soluciones aplicadas en distintas disciplinas.
                </h4>
            </div>
            <div class="columns-1 md:columns-2 xl:columns-3 gap-4 px-4">
                <div class="break-inside-avoid mb-4 relative group overflow-hidden rounded-lg">
                    <img class="md:min-h-72 h-auto max-w-full object-cover object-center rounded-lg transition duration-500 group-hover:scale-110" src="{{asset('img/industria.jpeg')}}" alt="Gallery image" />
                    <div class="absolute inset-0 bg-black/40 -z-0 rounded-lg"></div>
                    <div class="absolute bottom-8 left-6 flex flex-col text-white">
                        <span class="inline-block text-lg md:text-3xl mb-2">
                            Industria
                        </span>
                        <span class="text-sm uppercase">
                            Petroquímica y Transformación
                        </span>
                    </div>
                </div>
                <div class="break-inside-avoid mb-4 relative group overflow-hidden rounded-lg">
                    <img class="md:max-h-96 w-full object-cover object-center rounded-lg  transition duration-500 group-hover:scale-110" src="{{asset('img/salud.jpeg')}}" alt="Gallery image" />
                    <div class="absolute inset-0 bg-black/40 -z-0 rounded-lg"></div>
                    <div class="absolute bottom-8 left-6 flex flex-col text-white">
                        <span class="inline-block text-lg md:text-3xl mb-2">
                            Salud
                        </span>
                        <span class="text-sm uppercase">
                            Hospitales, Clínicas y Consultorios
                        </span>
                    </div>
                </div>
                <div class="break-inside-avoid mb-4 relative group overflow-hidden rounded-lg">
                    <img class="md:min-h-96 h-auto max-w-full object-cover object-center rounded-lg  transition duration-500 group-hover:scale-110" src="{{asset('img/transporte.jpeg')}}" alt="Gallery image" />
                    <div class="absolute inset-0 bg-black/40 -z-0 rounded-lg"></div>
                    <div class="absolute bottom-8 left-6 flex flex-col text-white">
                        <span class="inline-block text-lg md:text-3xl mb-2">
                            Logística
                        </span>
                        <span class="text-sm uppercase">
                            Transporte y almacenamiento
                        </span>
                    </div>
                </div>
                <div class="break-inside-avoid mb-4 relative group overflow-hidden rounded-lg">
                    <img class="md:min-h-72 h-auto max-w-full object-cover object-center rounded-lg  transition duration-500 group-hover:scale-110" src="{{asset('img/comercial.jpeg')}}" alt="Gallery image" />
                    <div class="absolute inset-0 bg-black/40 -z-0 rounded-lg"></div>
                    <div class="absolute bottom-8 left-6 flex flex-col text-white">
                        <span class="inline-block text-lg md:text-3xl mb-2">
                            Comercio
                        </span>
                        <span class="text-sm uppercase">
                            Retail, Tiendas y Restaurantes
                        </span>
                    </div>
                </div>
                <div class="break-inside-avoid mb-4 relative group overflow-hidden rounded-lg">
                    <img class="md:min-h-72 h-auto max-w-full object-cover object-center rounded-lg  transition duration-500 group-hover:scale-110" src="{{asset('img/educacion.jpeg')}}" alt="Gallery image" />
                    <div class="absolute inset-0 bg-black/40 -z-0 rounded-lg"></div>
                    <div class="absolute bottom-8 left-6 flex flex-col text-white">
                        <span class="inline-block text-lg md:text-3xl mb-2">
                            Educación
                        </span>
                        <span class="text-sm uppercase">
                            Colegios y Universidades
                        </span>
                    </div>
                </div>
                <div class="break-inside-avoid mb-4 relative group overflow-hidden rounded-lg">
                    <img class="md:min-h-96 h-auto max-w-full object-cover object-center rounded-lg  transition duration-500 group-hover:scale-110" src="{{asset('img/energia.jpeg')}}" alt="Gallery image" />
                    <div class="absolute inset-0 bg-black/40 -z-0 rounded-lg"></div>
                    <div class="absolute bottom-8 left-6 flex flex-col text-white">
                        <span class="inline-block text-lg md:text-3xl mb-2">
                            Energía
                        </span>
                        <span class="text-sm uppercase">
                            Petróleo y Gas
                        </span>
                    </div>
                </div>
                </div>
        </div>
    </div>

    <x-porque-bitmovil-v2 />

    <x-partners-computo />
    
</x-app-layout>
