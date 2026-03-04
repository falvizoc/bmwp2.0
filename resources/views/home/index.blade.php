<x-app-layout>
    @section('title', 'Bitmovil — Integración TI en Tampico | Redes, Seguridad y Licenciamiento')
    @section('description', 'Empresa de tecnología en Tampico, Tamaulipas. Integramos redes Cisco, seguridad Fortinet, licencias Microsoft y Autodesk, videovigilancia y más para empresas del norte de México.')

    {{-- HERO ESTÁTICO --}}
    <section class="relative h-full min-h-screen bg-no-repeat bg-center bg-cover bg-fixed"
             style="background-image: url('{{ asset('assets/img/carousel-ms.jpg') }}')">
        <div class="absolute z-10 inset-0 max-w-7xl mx-auto px-4 md:px-12 py-20 2xl:py-28 mt-10">
            <div class="max-w-2xl">
                <p class="text-xs uppercase tracking-[0.2em] text-gray-400 mb-5">
                    Tampico · Tamaulipas · Norte de México
                </p>
                <h1 class="text-3xl md:text-6xl font-light text-white leading-tight tracking-wide mb-5">
                    Integración TI para empresas en el norte de México.
                </h1>
                <p class="text-gray-300 text-sm md:text-lg font-light mb-8">
                    Cisco · Fortinet · Microsoft · Autodesk · Dell · HP
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="https://wa.link/bitmovil"
                       class="inline-flex items-center justify-center gap-2 px-7 py-3.5 text-sm text-white bg-primary rounded-full hover:opacity-90 transition duration-200">
                        <i class="fab fa-whatsapp"></i> Cotiza por WhatsApp
                    </a>
                    <a href="#propuesta"
                       class="inline-flex items-center justify-center gap-2 px-7 py-3.5 text-sm text-white border border-white/25 rounded-full hover:bg-white/10 transition duration-200">
                        Conoce las soluciones <i class="fa fa-angle-down text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 bg-black/80 -z-0"></div>
        <div class="hidden lg:block text-center absolute bottom-8 left-1/2 z-30">
            <a href="#propuesta" class="cursor-pointer inline-block shadow-md animate-updown rounded-full h-12 w-12 bg-blue-100 bg-opacity-20 text-gray-300 text-center hover:bg-primary duration-500">
                <i class="fa fa-angle-down text-3xl pt-2"></i>
            </a>
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
