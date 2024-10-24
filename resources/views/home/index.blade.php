<x-app-layout>
    <div id="carouselControlsIndicators" class="swiffy-slider relative h-[26rem] slider-nav-autoplay slider-item-nogap" data-slider-nav-autoplay-interval="7000">
        <div class="slider-container">
            <!-- Slide -->
            <div class="relative">
                <div class="absolute inset-0 -top-16 flex flex-col items-center justify-center text-center z-30">
                    <img src="{{ asset('assets/img/microsoft.png') }}" class="h-16 md:h-24" alt="">
                    <h2 class="text-2xl lg:text-5xl text-white tracking-wide max-w-4xl">
                        Licencias por volumen para
                    </h2>
                    <div class="text-green-500 text-2xl md:text-5xl typewriter">
                        <span class="typewriter-container">
                            <span class="typewriter-text" data-words="Empresas, Gobierno, Escuelas"></span>
                            <span class="typewriter-cursor"></span>
                        </span>
                    </div>
                </div>
                <a href="#" class="absolute z-30 bottom-12 left-1/2 transform -translate-x-1/2 text-xs md:text-sm py-3 px-6 text-white bg-green-500 rounded-full overflow-hidden group">
                    <div class="absolute top-0 right-full w-full h-full bg-green-600 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                    <span class="relative flex items-center justify-center">
                        Más información
                    </span>
                </a> 
                <img loading="lazy" class="h-[26rem] w-full object-cover object-center" src="{{ asset('assets/img/carousel-ms.jpg') }}" alt="First slide">
                <div class="absolute inset-0 bg-black/60 -z-0"></div>
            </div>
    
            <!-- Fortinet -->
            <div class="relative">
                <div class="absolute inset-0 -top-16 flex flex-col items-center justify-center text-center z-30">
                    <img src="{{ asset('assets/img/logo-fortinet-partner.png') }}" class="h-12 md:h-16 mb-4" alt="">
                    <h2 class="text-2xl lg:text-5xl text-black tracking-wide max-w-4xl font-[350]">
                        Transformación Digital con enfoque en Seguridad de la Información
                    </h2>
                </div>
                <a href="#" class="absolute z-30 bottom-12 left-1/2 transform -translate-x-1/2 text-xs md:text-sm py-3 px-6 text-white bg-red-500 rounded-full overflow-hidden group">
                    <div class="absolute top-0 right-full w-full h-full bg-red-600 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                    <span class="relative flex items-center justify-center">
                        Más información
                    </span>
                </a>
                <img loading="lazy" class="h-[26rem] w-full object-cover object-center" src="{{ asset('assets/img/carousel-fortinet.png') }}" alt="Second slide">
                <div class="absolute inset-0 bg-white/30 -z-0"></div>
            </div>
    
            <!-- Autodek -->
            <div class="relative">
                <div class="absolute inset-0 -top-16 flex flex-col items-center justify-center text-center z-30">
                    <img src="{{ asset('assets/img/autodesk.png') }}" class="h-10 md:h-12 mb-4" alt="">
                    <h2 class="text-2xl lg:text-5xl text-black tracking-wide max-w-4xl font-[350]">
                        Diseño 3D para Ingeniería y Construcción
                    </h2>
                </div>
                <a href="#" class="absolute z-30 bottom-12 left-1/2 transform -translate-x-1/2 text-xs md:text-sm py-3 px-6 text-white bg-sky-400 rounded-full overflow-hidden group">
                    <div class="absolute top-0 right-full w-full h-full bg-sky-500 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                    <span class="relative flex items-center justify-center">
                        Más información
                    </span>
                </a>
                <img loading="lazy" class="h-[26rem] w-full object-cover object-center" src="{{ asset('assets/img/carousel-ac.jpg') }}" alt="Second slide">
                <div class="absolute inset-0 bg-white/10 -z-0"></div>
            </div>
    
            <!-- Cisco -->
            <div class="relative">
                <div class="absolute inset-0 -top-16 flex flex-col items-center justify-center text-center z-30">
                    <img src="{{ asset('assets/img/logo-cisco-bco.png') }}" class="h-16 md:h-20 mb-4" alt="">
                    <h2 class="text-2xl lg:text-5xl text-white tracking-wide max-w-4xl font-[350]">
                        La solución completa en
                    </h2>
                    <div class="text-sky-500 text-3xl md:text-5xl typewriter">
                        <span class="typewriter-container">
                            <span class="typewriter-text" data-words="Cloud, Redes, Cyberseguridad"></span>
                            <span class="typewriter-cursor"></span>
                        </span>
                    </div>
                </div>
                <a href="#" class="absolute z-30 bottom-12 left-1/2 transform -translate-x-1/2 text-xs md:text-sm py-3 px-6 text-white bg-sky-400 rounded-full overflow-hidden group">
                    <div class="absolute top-0 right-full w-full h-full bg-sky-500 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                    <span class="relative flex items-center justify-center">
                        Más información
                    </span>
                </a>
                <img loading="lazy" class="h-[26rem] w-full object-cover object-center" src="{{ asset('assets/img/carousel-cisco.jpeg') }}" alt="Second slide">
                <div class="absolute inset-0 bg-black/60 -z-0"></div>
            </div>
    
            <!-- CCTV -->
            <div class="relative">
                <div class="absolute inset-0 -top-16 flex flex-col items-center justify-center text-center z-30">
                    <img src="{{ asset('assets/img/video-vigilancia.png') }}" class="h-20 mb-4" alt="">
                    <h2 class="text-2xl lg:text-5xl text-white tracking-wide max-w-4xl font-[350]">
                        Video vigilancia para
                    </h2>
                    <div class="text-sky-500 text-sm md:text-5xl typewriter">
                        <span class="typewriter-container">
                            <span class="typewriter-text" data-words="Hogar o Empresa"></span>
                            <span class="typewriter-cursor"></span>
                        </span>
                    </div>
                </div>
                <a href="#" class="absolute z-30 bottom-12 left-1/2 transform -translate-x-1/2 text-xs md:text-sm py-3 px-6 text-black bg-yellow-400 rounded-full overflow-hidden group">
                    <div class="absolute top-0 right-full w-full h-full bg-yellow-500 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                    <span class="relative flex items-center justify-center">
                        Más información
                    </span>
                </a>
                <img loading="lazy" class="h-[26rem] w-full object-cover object-center" src="{{ asset('assets/img/carousel-cisco.jpeg') }}" alt="Second slide">
                <div class="absolute inset-0 bg-black/60 -z-0"></div>
            </div>
        </div>
    
        <button type="button" class="slider-nav z-30"></button>
        <button type="button" class="slider-nav slider-nav-next z-30"></button>
    
        <div class="slider-indicators ml-auto relative z-30">
            <button class="active"><span class="sr-only">Slide 1</span></button>
            <button><span class="sr-only">Slide 2</span></button>
            <button><span class="sr-only">Slide 3</span></button>
            <button><span class="sr-only">Slide 4</span></button>
            <button><span class="sr-only">Slide 5</span></button>
        </div>
    </div>
    

    {{-- Ingeniería nuestra propuesta de valor. --}}
    <x-nuestra-propuesta />

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

    <x-partners-computo />
    
    @push('script')
   
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.typewriter-text').forEach(typewriterElement => {
                const words = typewriterElement.getAttribute('data-words').split(', ');
                let currentWordIndex = 0;
                let charIndex = 0;
                let isDeleting = false;
                const typeSpeed = 150;
                const deleteSpeed = 50;
                const delayBetweenWords = 2000;
    
                function type() {
                    const currentWord = words[currentWordIndex];
                    typewriterElement.textContent = isDeleting ? currentWord.substring(0, charIndex--) : currentWord.substring(0, charIndex++);
    
                    if (!isDeleting && charIndex === currentWord.length) {
                        setTimeout(() => isDeleting = true, delayBetweenWords);
                    } else if (isDeleting && charIndex === 0) {
                        isDeleting = false;
                        currentWordIndex = (currentWordIndex + 1) % words.length;
                    }
    
                    setTimeout(type, isDeleting ? deleteSpeed : typeSpeed);
                }
    
                type();
            });
        });
    </script>
    @endpush
</x-app-layout>
