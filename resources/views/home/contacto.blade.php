<x-app-layout>
    @section('title', 'Contacto | Bitmovil — Soluciones TI en Tampico, Tamaulipas')
    @section('description', 'Contáctanos para cotizar redes, seguridad informática, licencias de software o videovigilancia en Tampico. WhatsApp disponible: (833) 227-2527.')

    {{-- Hero --}}
    <section class="relative py-20 bg-primary text-white text-center">
        <div class="max-w-4xl mx-auto px-4 md:px-8">
            <span class="inline-block mb-5 px-3 py-1.5 text-xs uppercase font-semibold bg-white/10 text-white rounded-full tracking-widest">
                Contacto
            </span>
            <h1 class="text-3xl md:text-5xl font-light tracking-wide mb-6">
                Hablemos de tu proyecto.
            </h1>
            <p class="text-base md:text-xl text-white/70 max-w-2xl mx-auto">
                Cuéntanos qué necesitas y te respondemos en menos de 24 horas.
            </p>
        </div>
    </section>

    {{-- Contacto --}}
    <section class="py-10 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Info --}}
                <div>
                    <h2 class="text-2xl md:text-3xl font-light text-gray-900 mb-8">
                        Información de contacto
                    </h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Dirección</h3>
                                <p class="text-gray-600">Tampico, Tamaulipas, México</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Teléfono</h3>
                                <p class="text-gray-600">(833) 227-2527</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-white text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">WhatsApp</h3>
                                <a href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil." target="_blank" rel="nofollow" class="text-green-600 hover:underline">
                                    +52 (833) 227-2527
                                </a>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-facebook-f text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900">Facebook</h3>
                                <a href="https://www.facebook.com/BitmovilMx" target="_blank" rel="nofollow" class="text-blue-600 hover:underline">
                                    @BitmovilMx
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a href="https://wa.link/bitmovil" target="_blank" rel="nofollow"
                           class="inline-flex items-center space-x-2 px-8 py-4 bg-green-500 hover:bg-green-600 text-white rounded-full text-sm md:text-base transition-colors">
                            <i class="fab fa-whatsapp text-xl"></i>
                            <span>Iniciar conversación por WhatsApp</span>
                        </a>
                    </div>
                </div>

                {{-- Formulario --}}
                <div class="bg-white rounded-2xl shadow-md p-8">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Envíanos un mensaje</h2>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                                <input type="text" placeholder="Tu nombre" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Empresa</label>
                                <input type="text" placeholder="Nombre de tu empresa" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                            <input type="email" placeholder="correo@empresa.com" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Teléfono / WhatsApp</label>
                            <input type="tel" placeholder="(833) 000-0000" class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">¿En qué podemos ayudarte?</label>
                            <textarea rows="4" placeholder="Cuéntanos qué necesitas..." class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary resize-none" required></textarea>
                        </div>
                        <a href="https://wa.link/bitmovil" target="_blank" rel="nofollow"
                           class="block w-full text-center py-3 bg-primary hover:bg-primary-dark text-white rounded-full text-sm font-medium transition-colors">
                            Enviar por WhatsApp
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
