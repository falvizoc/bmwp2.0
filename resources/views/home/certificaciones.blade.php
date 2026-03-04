<x-app-layout>
    @section('title', 'Certificaciones | Microsoft, Fortinet, HP, Dell, Panduit, Tripp Lite — Bitmovil')
    @section('description', 'Bitmovil cuenta con certificaciones activas de Microsoft, Fortinet, HP, Dell, Panduit y Tripp Lite by Eaton. Garantía de calidad e integración tecnológica profesional en Tampico.')

    {{-- Hero --}}
    <section class="relative py-20 md:py-32 bg-primary text-white text-center">
        <div class="max-w-4xl mx-auto px-4 md:px-8">
            <span class="inline-block mb-5 px-3 py-1.5 text-xs uppercase font-semibold bg-white/10 text-white rounded-full tracking-widest">
                Certificaciones
            </span>
            <h1 class="text-3xl md:text-5xl font-light tracking-wide mb-6">
                Respaldados por los fabricantes más exigentes.
            </h1>
            <p class="text-base md:text-xl text-white/70 max-w-2xl mx-auto">
                Nuestro equipo mantiene certificaciones activas con los principales fabricantes de TI, garantizando que cada solución esté alineada a las normas más exigentes de la industria.
            </p>
        </div>
    </section>

    {{-- Certificaciones --}}
    <section class="py-10 md:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                    <img loading="lazy" src="{{ asset('img/partners/logo-microsoft.png') }}" alt="Microsoft" class="h-12 object-contain mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">Microsoft Partner</h2>
                    <p class="text-sm text-gray-600">Licenciamiento por volumen para empresas, gobierno y educación. CSP certificado.</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                    <img loading="lazy" src="{{ asset('img/partners/logo-fortinet.svg') }}" alt="Fortinet" class="h-12 object-contain mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">Fortinet Partner</h2>
                    <p class="text-sm text-gray-600">Seguridad de red, firewall, SD-WAN y protección endpoint con soluciones Fortinet certificadas.</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                    <img loading="lazy" src="{{ asset('img/partners/logo-tripplite.jpg') }}" alt="Tripp Lite by Eaton" class="h-12 object-contain mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">Tripp Lite by Eaton</h2>
                    <p class="text-sm text-gray-600">UPS, PDUs y protección eléctrica para infraestructura TI crítica y centros de datos.</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                    <img loading="lazy" src="{{ asset('img/partners/logo-panduit.svg') }}" alt="Panduit" class="h-12 object-contain mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">Panduit</h2>
                    <p class="text-sm text-gray-600">Infraestructura física de redes: cableado estructurado, patch panels y gestión de cableado.</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                    <img loading="lazy" src="{{ asset('img/partners/logo-hp.svg') }}" alt="HP" class="h-12 object-contain mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">HP Partner</h2>
                    <p class="text-sm text-gray-600">Equipo de cómputo, servidores e impresión HP para entornos empresariales.</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
                    <img loading="lazy" src="{{ asset('img/partners/logo-dell.svg') }}" alt="Dell" class="h-12 object-contain mb-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">Dell Technologies</h2>
                    <p class="text-sm text-gray-600">Servidores, almacenamiento y workstations Dell para infraestructura TI empresarial.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-hablemos />
</x-app-layout>
