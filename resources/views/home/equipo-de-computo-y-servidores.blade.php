<x-app-layout>
    @section('title', 'Equipos de Cómputo y Servidores en ' . $geoLabel . ' | Bitmovil')
    @section('description', 'Venta e instalación de equipos de cómputo, laptops y servidores HP, Dell y Lenovo para empresas en ' . $geoLabel . '. Cotiza hoy.')
    @section('og_title', 'Equipos de Cómputo y Servidores en ' . $geoLabel . ' | Bitmovil')

    <section class="relative min-h-[50vh] flex items-center bg-gradient-to-br from-[#0A4C98] via-[#073B74] to-[#1a1a2e]">
        <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-12 py-16 w-full">
            <h1 class="tracking-wide text-3xl md:text-5xl 2xl:text-6xl text-white max-w-3xl mb-4 font-light">
                Equipos de Cómputo y Servidores en {{ $geoLabel }}
            </h1>
            <div class="text-white text-4xl md:text-7xl 2xl:text-8xl typewriter">
                <span class="typewriter-container">
                    <span class="typewriter-text font-semibold" data-words="HP, Lenovo, Dell"></span>
                    <span class="typewriter-cursor"></span>
                </span>
            </div>
            <p class="text-white text-xl mt-8 mb-12 max-w-2xl">
                Equipos de alto desempeño para <strong> empresas de todos los tamaños.</strong>
            </p>
            <a href="#" class="text-white text-sm md:text-base tracking-tight btn-primary bg-green-500 px-6 py-3 rounded-full hover:bg-green-600  transition duration-200">
                Solicita una cotización
            </a>
        </div>
        </div>
    </section>

      {{-- Partners Computo --}}
      <section class="bg-gray-100">
        <div class="py-8 lg:py-16 mx-auto px-4">
            <h3 class="mb-4 lg:mb-6 text-4xl md:text-5xl tracking-wide leading-tight text-center text-primary">
                Partners
            </h3>
            <h4 class="text-xl md:text-3xl font-light text-gray-800 text-center mb-10">
                En alianza con los fabricantes más importantes de la industria.
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
