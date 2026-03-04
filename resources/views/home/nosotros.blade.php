<x-app-layout>
    @section('title', 'Quiénes Somos | Bitmovil — Empresa de Tecnología en Tampico')
    @section('description', 'Bitmovil es una empresa de integración tecnológica con más de 10 años en Tampico, Tamaulipas. Conoce nuestra historia, equipo y valores.')

    {{-- Hero --}}
    <section class="relative py-20 md:py-32 bg-primary text-white text-center">
        <div class="max-w-4xl mx-auto px-4 md:px-8">
            <span class="inline-block mb-5 px-3 py-1.5 text-xs uppercase font-semibold bg-white/10 text-white rounded-full tracking-widest">
                Quiénes somos
            </span>
            <h1 class="text-3xl md:text-5xl font-light tracking-wide mb-6">
                Tecnología que resuelve problemas reales.
            </h1>
            <p class="text-base md:text-xl text-white/70 max-w-2xl mx-auto">
                Bitmovil es una empresa de tecnología con sede en Tampico, Tamaulipas, enfocada en integrar, operar y mantener infraestructura TI crítica para empresas del norte de México.
            </p>
        </div>
    </section>

    {{-- Historia --}}
    <section class="py-10 md:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-4xl font-light text-gray-900 tracking-wide mb-6">
                        Más de <b>10 años</b> construyendo confianza tecnológica.
                    </h2>
                    <p class="text-base md:text-lg text-gray-600 mb-4">
                        Fundada en Tampico, Tamaulipas, Bitmovil nació con la misión de acercar tecnología empresarial de clase mundial a las PyMEs del noreste de México. Hoy integramos soluciones de los fabricantes más importantes — Microsoft, Fortinet, Dell, HP y Panduit — con un enfoque en calidad, tiempo y costo.
                    </p>
                    <p class="text-base md:text-lg text-gray-600 mb-6">
                        Nuestro equipo de ingenieros certificados entiende que la tecnología debe resolver problemas reales, no crear nuevos. Por eso cada proyecto parte de un dimensionamiento personalizado antes de cualquier implementación.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="border-l-4 border-primary pl-4">
                            <div class="text-3xl font-bold text-primary">+200</div>
                            <div class="text-sm text-gray-500">Clientes atendidos</div>
                        </div>
                        <div class="border-l-4 border-primary pl-4">
                            <div class="text-3xl font-bold text-primary">10+</div>
                            <div class="text-sm text-gray-500">Años de experiencia</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-2xl p-8 text-center">
                    <i class="fas fa-building text-6xl text-primary mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Tampico, Tamaulipas</h3>
                    <p class="text-gray-600">Sede central — atendemos todo el noreste de México</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-hablemos />
</x-app-layout>
