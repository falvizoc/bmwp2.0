<div class="sticky top-0 z-50" x-data="{ mobileOpen: false, openMenuSoluciones: null }" @click.away="openMenuSoluciones = null">
    <nav class="bg-primary relative">
        <div class="flex items-center justify-between max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">

            {{-- Logo --}}
            <a href="/" class="flex items-center">
                <img src="{{ asset('img/logos/logo-bitmovil-blanco.png') }}" class="h-9" alt="Logo Bitmovil" />
            </a>

            {{-- Desktop nav --}}
            <div class="hidden md:flex items-center space-x-6">
                <ul class="flex items-center space-x-6 text-base">
                    <li>
                        <button @click="openMenuSoluciones = openMenuSoluciones ? null : true"
                                class="flex items-center space-x-1 text-white hover:text-yellow-400 group">
                            <span :class="{ 'text-yellow-400': openMenuSoluciones }" class="transition-colors">Soluciones</span>
                            <i :class="openMenuSoluciones ? 'fas fa-chevron-up text-yellow-400' : 'fas fa-chevron-down'"
                               class="text-xs transition-all duration-200 group-hover:text-yellow-400 ml-1"></i>
                        </button>
                    </li>
                    <li><a href="{{ route('nosotros') }}" class="text-white hover:text-yellow-400 transition-colors">Nosotros</a></li>
                    <li><a href="{{ route('certificaciones') }}" class="text-white hover:text-yellow-400 transition-colors">Certificaciones</a></li>
                    <li><a href="{{ route('contacto') }}" class="text-white hover:text-yellow-400 transition-colors">Contacto</a></li>
                </ul>
                <div class="flex items-center space-x-2">
                    <a target="_blank" rel="nofollow" href="https://store.bitmovil.mx/" aria-label="Tienda en Línea"
                       class="inline-flex items-center space-x-1 px-3 py-1.5 text-sm text-white bg-red-600 hover:bg-red-700 rounded-full transition">
                        <i class="fas fa-shopping-cart"></i><span>Tienda</span>
                    </a>
                    <a target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil." aria-label="WhatsApp"
                       class="inline-flex items-center justify-center w-8 h-8 bg-green-500 hover:scale-105 rounded-full transition">
                        <i class="fab fa-whatsapp text-white text-lg"></i>
                    </a>
                    <a target="_blank" rel="nofollow" href="https://www.facebook.com/BitmovilMx" aria-label="Facebook"
                       class="inline-flex items-center justify-center w-8 h-8 bg-blue-700 hover:scale-105 rounded-full transition">
                        <i class="fab fa-facebook-f text-white"></i>
                    </a>
                    <a target="_blank" rel="nofollow" href="https://www.linkedin.com/company/bitmovil" aria-label="LinkedIn"
                       class="inline-flex items-center justify-center w-8 h-8 bg-blue-500 hover:scale-105 rounded-full transition">
                        <i class="fab fa-linkedin-in text-white"></i>
                    </a>
                </div>
            </div>

            {{-- Mobile: WhatsApp + hamburger --}}
            <div class="flex items-center space-x-2 md:hidden">
                <a target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil." aria-label="WhatsApp"
                   class="inline-flex items-center justify-center w-9 h-9 bg-green-500 rounded-full">
                    <i class="fab fa-whatsapp text-white text-lg"></i>
                </a>
                <button @click="mobileOpen = !mobileOpen" type="button" aria-label="Menú"
                        class="inline-flex items-center justify-center w-9 h-9 text-white rounded-lg hover:bg-white/10 transition">
                    <svg x-show="!mobileOpen" class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                    <svg x-show="mobileOpen" class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mega-menu desktop (Soluciones) --}}
        <div x-show="openMenuSoluciones" x-transition
             class="absolute z-50 border-gray-200 shadow-sm bg-white border-y w-full">
            <div class="px-4 py-2 mx-auto text-gray-800" x-data="{openMenu: false}" @click.away="openMenu = false">
                <ul class="grid sm:grid-cols-3 md:divide-x divide-gray-200">
                    @if ($solutions->count())
                        @foreach ($solutions as $solution)
                            <li class="relative px-4">
                                @if ($solution->services->count())
                                    <a href="javascript:void(0)"
                                       @click="openMenu = openMenu === {{ $solution->id }} ? null : {{ $solution->id }}"
                                       class="my-1 block p-4 rounded-lg hover:bg-gray-100"
                                       :class="{'bg-gray-100': openMenu === {{ $solution->id }} }">
                                        <div class="text-sm md:text-lg font-regular tracking-wide flex items-center md:space-x-2">
                                            <div class="flex-1">
                                                <i class="{{ $solution->icon }} text-lg"></i>
                                                <span>{{ $solution->name }}</span>
                                            </div>
                                            <i :class="openMenu === {{ $solution->id }} ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"
                                               class="ml-auto text-gray-700 text-sm transition-transform duration-200"></i>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{ route('servicios.'.$solution->slug) }}" class="my-1 block p-4 rounded-lg hover:bg-gray-100">
                                        <div class="text-sm md:text-lg font-regular tracking-wide flex items-center space-x-2">
                                            <div class="flex-1">
                                                <i class="{{ $solution->icon }} text-lg"></i>
                                                <span>{{ $solution->name }}</span>
                                            </div>
                                            <i class="fas fa-arrow-right ml-auto text-gray-700 text-sm"></i>
                                        </div>
                                    </a>
                                @endif
                                @if ($solution->services->count())
                                    <div x-show="openMenu === {{ $solution->id }}" x-transition
                                         class="w-[calc(100%-2rem)] absolute z-50 mt-2 bg-white rounded-lg border border-gray-100">
                                        <ul class="grid grid-cols-1 divide-y divide-gray-100">
                                            @foreach ($solution->services as $service)
                                                <li class="p-4 hover:bg-gray-100">
                                                    <a href="{{ route('servicios.'.$service->slug) }}" class="text-gray-900 text-base rounded-lg">
                                                        <div class="flex items-center space-x-1">
                                                            <i class="{{ $service->icon }} text-xl"></i>
                                                            <span class="text-sm md:text-lg">{{ $service->name }}</span>
                                                        </div>
                                                        <span class="text-gray-500 tracking-wide text-xs md:text-sm">{{ $service->description }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>

        {{-- Mobile drawer --}}
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden bg-white border-t border-gray-200 shadow-xl max-h-[80vh] overflow-y-auto">
            <div class="px-4 py-4 space-y-1">

                {{-- Soluciones accordion --}}
                <div x-data="{ solOpen: false }">
                    <button @click="solOpen = !solOpen"
                            class="w-full flex items-center justify-between py-3 px-2 text-gray-900 font-medium border-b border-gray-100">
                        <span class="flex items-center space-x-2">
                            <i class="fas fa-th-large text-primary text-sm"></i>
                            <span>Soluciones</span>
                        </span>
                        <i :class="solOpen ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-xs text-gray-400 transition-transform duration-200"></i>
                    </button>
                    <div x-show="solOpen" x-transition class="pl-3 pt-1 pb-2 space-y-1">
                        @if ($solutions->count())
                            @foreach ($solutions as $solution)
                                <div x-data="{ subOpen: false }">
                                    @if ($solution->services->count())
                                        <button @click="subOpen = !subOpen"
                                                class="w-full flex items-center justify-between py-2.5 px-2 text-sm text-gray-700 rounded-lg hover:bg-gray-50">
                                            <span>
                                                <i class="{{ $solution->icon }} mr-2 text-primary text-sm"></i>{{ $solution->name }}
                                            </span>
                                            <i :class="subOpen ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-xs text-gray-400"></i>
                                        </button>
                                        <div x-show="subOpen" x-transition class="pl-6 pb-1">
                                            @foreach ($solution->services as $service)
                                                <a href="{{ route('servicios.'.$service->slug) }}"
                                                   @click="mobileOpen = false"
                                                   class="flex items-center space-x-2 py-2 text-sm text-gray-600 hover:text-primary">
                                                    <i class="{{ $service->icon }} text-xs text-gray-400"></i>
                                                    <span>{{ $service->name }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    @else
                                        <a href="{{ route('servicios.'.$solution->slug) }}"
                                           @click="mobileOpen = false"
                                           class="flex items-center space-x-2 py-2.5 px-2 text-sm text-gray-700 rounded-lg hover:bg-gray-50 hover:text-primary">
                                            <i class="{{ $solution->icon }} mr-2 text-primary text-sm"></i>{{ $solution->name }}
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- Nav links --}}
                <a href="{{ route('nosotros') }}" @click="mobileOpen = false"
                   class="flex items-center space-x-2 py-3 px-2 text-gray-900 font-medium border-b border-gray-100 hover:text-primary transition-colors">
                    <i class="fas fa-users text-primary text-sm w-4"></i><span>Nosotros</span>
                </a>
                <a href="{{ route('certificaciones') }}" @click="mobileOpen = false"
                   class="flex items-center space-x-2 py-3 px-2 text-gray-900 font-medium border-b border-gray-100 hover:text-primary transition-colors">
                    <i class="fas fa-certificate text-primary text-sm w-4"></i><span>Certificaciones</span>
                </a>
                <a href="{{ route('contacto') }}" @click="mobileOpen = false"
                   class="flex items-center space-x-2 py-3 px-2 text-gray-900 font-medium border-b border-gray-100 hover:text-primary transition-colors">
                    <i class="fas fa-envelope text-primary text-sm w-4"></i><span>Contacto</span>
                </a>

                {{-- CTAs --}}
                <div class="pt-3 grid grid-cols-2 gap-3">
                    <a href="https://store.bitmovil.mx/" target="_blank" rel="nofollow"
                       class="flex items-center justify-center space-x-2 py-3 bg-red-600 hover:bg-red-700 text-white rounded-full text-sm transition-colors">
                        <i class="fas fa-shopping-cart"></i><span>Tienda</span>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil." target="_blank" rel="nofollow"
                       class="flex items-center justify-center space-x-2 py-3 bg-green-500 hover:bg-green-600 text-white rounded-full text-sm transition-colors">
                        <i class="fab fa-whatsapp text-lg"></i><span>WhatsApp</span>
                    </a>
                </div>

                {{-- Social --}}
                <div class="pt-3 pb-2 flex items-center justify-center space-x-4">
                    <a href="https://www.facebook.com/BitmovilMx" target="_blank" rel="nofollow" aria-label="Facebook"
                       class="w-9 h-9 flex items-center justify-center bg-blue-700 rounded-full hover:scale-105 transition">
                        <i class="fab fa-facebook-f text-white text-sm"></i>
                    </a>
                    <a href="https://www.instagram.com/bitmovil/" target="_blank" rel="nofollow" aria-label="Instagram"
                       class="w-9 h-9 flex items-center justify-center bg-gradient-to-br from-pink-500 to-yellow-500 rounded-full hover:scale-105 transition">
                        <i class="fab fa-instagram text-white text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/bitmovil" target="_blank" rel="nofollow" aria-label="LinkedIn"
                       class="w-9 h-9 flex items-center justify-center bg-blue-500 rounded-full hover:scale-105 transition">
                        <i class="fab fa-linkedin-in text-white text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
