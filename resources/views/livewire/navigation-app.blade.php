<div class="sticky top-0 z-50" x-data="{ openMenuSoluciones: null }" @click.away="openMenuSoluciones = null; ">
    <nav class="bg-primary relative">
        <div class="flex flex-wrap justify-between items-center max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logos/logo-bitmovil-blanco.png') }}" class="h-9" alt="Logo" />
            </a>
            <button data-collapse-toggle="mega-menu-full" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div id="mega-menu-full" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="text-base flex flex-col items-center justify-center p-4 md:p-0 mt-4 rounded-lg md:space-x-6 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0" aria-current="page">Nosotros</a>
                    </li>
                    <li>
                        <button @click="openMenuSoluciones = !openMenuSoluciones" class="flex items-center justify-between space-x-2 w-full py-2 px-3 text-white rounded md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 group">
                            <span :class="{ 'text-yellow-400': openMenuSoluciones }" class="group-hover:text-yellow-400">
                                Soluciones
                            </span>
                            <i :class="[openMenuSoluciones ? 'fas fa-chevron-up text-yellow-400' : 'fas fa-chevron-down', 'group-hover:text-yellow-400', 'ml-auto', 'text-xs', 'transition-transform', 'duration-200']"></i>
                        </button>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Certificaciones</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Casos de éxito</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Blog y Recursos</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0">Contacto</a>
                    </li>
                    <li>
                        <div class="flex ml-auto">
                          <a target="_blank" rel="nofollow" href="https://store.bitmovil.mx/" class="inline-flex space-x-1 items-center justify-center text-indigo-100 rounded-full focus:shadow-outline bg-red-600 hover:bg-red-700 cursor-pointer transition ease-in duration-200 text-sm px-3 mr-2" aria-label="Tienda en Línea">
                            <ion-icon name="cart" class="text-lg"></ion-icon>
                            <span>Tienda en Línea</span>
                          </a>
                          <a target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=5218332272527&text=%C2%A1Hola!%20Bitmovil." class="inline-flex items-center justify-center w-8 h-8 text-indigo-100  rounded-full focus:shadow-outline bg-green-500 hover:scale-105 cursor-pointer transition ease-in duration-200" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp text-white text-lg"></i>
                          </a>
                          <a target="_blank" rel="nofollow" href="https://www.facebook.com/BitmovilMx" class="inline-flex items-center justify-center w-8 h-8 mx-2 text-indigo-100  rounded-full focus:shadow-outline bg-blue-700 hover:scale-105 cursor-pointer transition ease-in duration-200" aria-label="Instagram">
                            <i class="fab fa-facebook-f text-white"></i>
                          </a>
                          <a target="_blank" rel="nofollow" href="https://www.linkedin.com/company/bitmovil" class="inline-flex items-center justify-center w-8 h-8 text-indigo-100 rounded-full focus:shadow-outline bg-blue-500 hover:scale-105 cursor-pointer transition ease-in duration-200" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-white"></i>
                          </a>
                        </div>
                      </li>
                </ul>
            </div>
        </div>
        <div x-show="openMenuSoluciones" class="absolute z-50 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y w-full">
            <div class="px-4 py-2 mx-auto text-gray-800" x-data="{openMenu: false}" @click.away="openMenu = false">
                <ul class="grid sm:grid-cols-3 divide-x divide-gray-200 dark:divide-gray-600">
                    @if ($solutions->count())
                        @foreach ($solutions as $solution)
                            <li class="relative px-4">
                                @if ($solution->services->count())
                                    <a href="javascript:void(0)" @click="openMenu = openMenu === {{ $solution->id }} ? null : {{ $solution->id }}" class="my-1 block p-4 rounded-lg hover:bg-gray-100" :class="{'bg-gray-100': openMenu === {{ $solution->id }} }">
                                        <div class="text-lg font-regular tracking-wide flex items-center space-x-2">
                                            <div class="flex-1">
                                                <ion-icon name="{{ $solution->icon }}" class="text-lg"></ion-icon>
                                                <span>{{ $solution->name }}</span>
                                            </div>
                                            <i :class="openMenu === {{ $solution->id }} ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="ml-auto text-gray-700 text-sm transition-transform duration-200"></i>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{route('servicios.'.$solution->slug)}}" class="my-1 block p-4 rounded-lg hover:bg-gray-100">
                                        <div class="text-lg font-regular tracking-wide flex items-center space-x-2">
                                            <div class="flex-1">
                                                <ion-icon name="{{ $solution->icon }}" class="text-lg"></ion-icon>
                                                <span>{{ $solution->name }}</span>
                                            </div>
                                            <i class="fas fa-arrow-right ml-auto text-gray-700 text-sm transition-transform duration-200"></i>
                                        </div>
                                    </a>
                                @endif
                                
                                @if ($solution->services->count())
                                    <div x-show="openMenu === {{ $solution->id }}"  x-transition class="w-[calc(100%-2rem)] absolute z-50 mt-2 bg-white rounded-lg border border-gray-100">
                                        <ul class="grid grid-cols-1 divide-y divide-gray-100 rounded-none">
                                            @foreach ($solution->services as $service)
                                                <li class="p-4 hover:bg-gray-100">
                                                    <a href="{{route('servicios.'.$service->slug)}}" class="text-gray-900 text-base rounded-lg">
                                                        <div class="flex items-center space-x-1">
                                                            <ion-icon name="{{ $service->icon }}" class="text-xl"></ion-icon>
                                                            <span class="">{{ $service->name }}</span>
                                                        </div>
                                                        <span class="text-gray-500 tracking-wide text-sm">{{ $service->description }}</span>
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
    </nav>
</div>
