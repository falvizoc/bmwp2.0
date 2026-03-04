@extends('layouts.landing')

@section('title', 'Seguridad Informática en ' . $geoLabel . ' | Bitmovil')
@section('description', 'Protege tu empresa con soluciones de ciberseguridad certificadas Fortinet en ' . $geoLabel . '. Cotiza sin costo hoy.')

@section('content')

{{-- HERO --}}
<section class="min-h-[60vh] flex items-center bg-gradient-to-br from-[#0A4C98] via-[#073B74] to-[#1a1a2e]">
    <div class="max-w-4xl mx-auto px-4 md:px-8 py-16 text-center">
        <p class="text-xs uppercase tracking-widest text-white/60 mb-3">{{ $geoLabel }}</p>
        <h1 class="text-3xl md:text-5xl font-light text-white leading-tight mb-4">
            Seguridad Informática para Empresas en {{ $geoLabel }}
        </h1>
        <p class="text-lg md:text-xl text-white/80 mb-6 max-w-2xl mx-auto">
            ¿Tu red está protegida? Implementamos firewalls, detección de intrusos y monitoreo 24/7 con tecnología Fortinet.
        </p>
        <div class="flex flex-wrap gap-3 justify-center mb-8 text-sm text-white/80">
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Fortinet Partner Certificado</span>
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> +200 empresas protegidas</span>
            <span class="flex items-center gap-1"><i class="fas fa-check-circle text-green-400"></i> Respuesta en &lt;2h</span>
        </div>
        <a href="https://api.whatsapp.com/send?phone=5218332272527&text=Hola%20Bitmovil%2C%20quiero%20cotizar%20Seguridad%20Inform%C3%A1tica%20para%20mi%20empresa."
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
            <h3 class="font-semibold text-gray-800">Partner Certificado</h3>
            <p class="text-sm text-gray-500">Fortinet Certified Network Security. Técnicos con certificación vigente.</p>
        </div>
        <div class="flex flex-col items-center gap-2">
            <i class="fas fa-history text-3xl text-[#0A4C98]"></i>
            <h3 class="font-semibold text-gray-800">10+ Años de Experiencia</h3>
            <p class="text-sm text-gray-500">Más de una década integrando seguridad para empresas en el norte de México.</p>
        </div>
        <div class="flex flex-col items-center gap-2">
            <i class="fas fa-headset text-3xl text-[#0A4C98]"></i>
            <h3 class="font-semibold text-gray-800">Soporte 24/7</h3>
            <p class="text-sm text-gray-500">Monitoreo continuo y atención a incidentes los 365 días del año.</p>
        </div>
    </div>
</section>

{{-- BENTO BENEFICIOS --}}
<section class="bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-light text-gray-800 text-center mb-8">¿Por qué elegir Bitmovil para tu seguridad?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <i class="fas fa-shield-virus text-2xl text-red-500 mb-3"></i>
                <h3 class="font-semibold text-gray-800 mb-2">¿Qué problema resuelve?</h3>
                <p class="text-sm text-gray-600">Ataques ransomware, accesos no autorizados y vulnerabilidades en tu red que frenan tu operación.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <i class="fas fa-cogs text-2xl text-[#0A4C98] mb-3"></i>
                <h3 class="font-semibold text-gray-800 mb-2">¿Cómo funciona?</h3>
                <p class="text-sm text-gray-600">Diagnóstico de red, implementación de firewall Fortinet, segmentación de redes y monitoreo continuo.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <i class="fas fa-list-check text-2xl text-green-500 mb-3"></i>
                <h3 class="font-semibold text-gray-800 mb-2">¿Qué incluye?</h3>
                <p class="text-sm text-gray-600">Firewall UTM, VPN, detección de intrusos, reportes mensuales y soporte técnico dedicado.</p>
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
<section class="bg-[#0A4C98] py-14">
    <div class="max-w-xl mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-light text-white mb-2">Solicita tu diagnóstico sin costo</h2>
        <p class="text-white/70 text-sm mb-8">Revisamos tu infraestructura actual y te entregamos un reporte de vulnerabilidades — sin compromiso.</p>
        <form onsubmit="cotizarWA(event, 'Seguridad Informática')" class="space-y-3 text-left">
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
