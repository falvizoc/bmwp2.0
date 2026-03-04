@extends('layouts.landing')

@section('title', 'Cableado Estructurado y Fibra Óptica en ' . $geoLabel . ' | Bitmovil')
@section('description', 'Instalación y certificación de cableado Cat6A y fibra óptica para empresas en ' . $geoLabel . '. Cotiza sin costo hoy.')

@section('content')

{{-- HERO --}}
<section class="min-h-[60vh] flex items-center bg-gradient-to-br from-[#073B74] via-[#0A4C98] to-[#00a1df]">
    <div class="max-w-4xl mx-auto px-4 md:px-8 py-16 text-center">
        <p class="text-xs uppercase tracking-widest text-white/60 mb-3">{{ $geoLabel }}</p>
        <h1 class="text-3xl md:text-5xl font-light text-white leading-tight mb-4">
            Cableado Estructurado y Fibra Óptica en {{ $geoLabel }}
        </h1>
        <p class="text-lg md:text-xl text-white/80 mb-6 max-w-2xl mx-auto">
            ¿Tu red es lenta o inestable? Diseñamos e instalamos infraestructura de conectividad certificada para tu empresa.
        </p>
        <div class="flex flex-wrap gap-3 justify-center mb-8 text-sm text-white/80">
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Certificación de infraestructura</span>
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> +200 instalaciones</span>
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Garantía de trabajo</span>
        </div>
        <a href="https://api.whatsapp.com/send?phone=5218332272527&text=Hola%20Bitmovil%2C%20quiero%20cotizar%20Cableado%20Estructurado%20o%20Fibra%20%C3%93ptica%20para%20mi%20empresa."
           target="_blank" rel="nofollow"
           class="inline-flex items-center gap-2 px-8 py-4 text-base font-medium text-white bg-green-500 hover:bg-green-600 rounded-full shadow-lg transition transform hover:scale-105">
            <i class="fab fa-whatsapp text-xl"></i> Cotizar AHORA por WhatsApp
        </a>
    </div>
</section>

{{-- TRUST STRIP --}}
<section class="bg-white py-10 border-b border-gray-100">
    <div class="max-w-4xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
        <div class="flex flex-col items-center gap-2">
            <i class="fas fa-certificate text-3xl text-[#0A4C98]"></i>
            <h3 class="font-semibold text-gray-800">Instalación Certificada</h3>
            <p class="text-sm text-gray-500">Cumplimos normas ANSI/TIA-568 para cableado categoría 6A y fibra óptica monomodo y multimodo.</p>
        </div>
        <div class="flex flex-col items-center gap-2">
            <i class="fas fa-history text-3xl text-[#0A4C98]"></i>
            <h3 class="font-semibold text-gray-800">10+ Años de Experiencia</h3>
            <p class="text-sm text-gray-500">Infraestructura instalada en industrias, hospitales, colegios y corporativos en el norte de México.</p>
        </div>
        <div class="flex flex-col items-center gap-2">
            <i class="fas fa-headset text-3xl text-[#0A4C98]"></i>
            <h3 class="font-semibold text-gray-800">Soporte Post-Instalación</h3>
            <p class="text-sm text-gray-500">Entregamos pruebas y certificación de cada punto. Respaldo técnico incluido.</p>
        </div>
    </div>
</section>

{{-- BENTO BENEFICIOS --}}
<section class="bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-light text-gray-800 text-center mb-8">¿Por qué elegir Bitmovil para tu infraestructura?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <i class="fas fa-network-wired text-2xl text-red-500 mb-3"></i>
                <h3 class="font-semibold text-gray-800 mb-2">¿Qué problema resuelve?</h3>
                <p class="text-sm text-gray-600">Redes lentas, caídas frecuentes y cableado improvisado que impide el crecimiento de tu empresa.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <i class="fas fa-drafting-compass text-2xl text-[#0A4C98] mb-3"></i>
                <h3 class="font-semibold text-gray-800 mb-2">¿Cómo funciona?</h3>
                <p class="text-sm text-gray-600">Levantamiento de sitio, diseño de planos, instalación y certificación con equipo Fluke o equivalente.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <i class="fas fa-list-check text-2xl text-green-500 mb-3"></i>
                <h3 class="font-semibold text-gray-800 mb-2">¿Qué incluye?</h3>
                <p class="text-sm text-gray-600">Cableado Cat6A, fibra óptica, patch panels, etiquetado, pruebas certificadas y documentación de red.</p>
            </div>
        </div>
    </div>
</section>

{{-- LOGOS PARTNERS --}}
<section class="bg-white py-8 border-y border-gray-100">
    <div class="max-w-3xl mx-auto px-4">
        <p class="text-center text-xs uppercase tracking-widest text-gray-400 mb-6">Partners tecnológicos</p>
        <div class="flex flex-wrap items-center justify-center gap-8">
            <img src="{{ asset('img/partners/logo-fortinet.svg') }}" class="h-10 object-contain" alt="Fortinet" loading="lazy">
            <img src="{{ asset('img/partners/logo-microsoft.png') }}" class="h-7 object-contain" alt="Microsoft" loading="lazy">
            <img src="{{ asset('img/partners/logo-dell.svg') }}" class="h-8 object-contain" alt="Dell" loading="lazy">
        </div>
    </div>
</section>

{{-- CTA FINAL --}}
<section class="bg-[#073B74] py-14">
    <div class="max-w-xl mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-light text-white mb-2">Solicita tu diagnóstico sin costo</h2>
        <p class="text-white/70 text-sm mb-8">Evaluamos tu infraestructura actual y te presentamos un plan de mejora con costos reales — sin compromiso.</p>
        <form onsubmit="cotizarWA(event, 'Cableado Estructurado y Fibra Óptica')" class="space-y-3 text-left">
            <input name="nombre" type="text" placeholder="Tu nombre"
                   class="w-full px-4 py-3 rounded-xl border border-white/20 bg-white/10 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-400" required>
            <input name="tel" type="tel" placeholder="Teléfono"
                   class="w-full px-4 py-3 rounded-xl border border-white/20 bg-white/10 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-400" required>
            <input name="empresa" type="text" placeholder="Empresa"
                   class="w-full px-4 py-3 rounded-xl border border-white/20 bg-white/10 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-green-400">
            <button type="submit"
                    class="w-full inline-flex items-center justify-center gap-2 py-3.5 text-base font-medium text-white bg-green-500 hover:bg-green-600 rounded-xl transition transform hover:scale-[1.02]">
                <i class="fab fa-whatsapp text-xl"></i> Enviar por WhatsApp
            </button>
        </form>
    </div>
</section>

@endsection

@push('script')
<script>
function cotizarWA(e, servicio) {
    e.preventDefault();
    const f = e.target;
    const nombre = f.nombre.value;
    const tel = f.tel.value;
    const empresa = f.empresa ? f.empresa.value : '';
    const msg = encodeURIComponent(`Hola Bitmovil, soy ${nombre}${empresa ? ' de ' + empresa : ''}. Tel: ${tel}. Requiero información sobre ${servicio}.`);
    window.open(`https://api.whatsapp.com/send?phone=5218332272527&text=${msg}`, '_blank');
}
</script>
@endpush
