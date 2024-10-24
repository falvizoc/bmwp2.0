<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow sticky top-0" style="z-index: 50">
    <!-- Primary Navigation Menu -->

    {{-- Menu Template --}}
        <div
        x-data="setup()"
        x-init="$refs.loading.classList.add('hidden');"
        :class="{ 'dark': isDark }"
        @resize.window="watchScreen()"
    >

        {{-- Menu jetstream --}}
        <div class="container">
            <div class="flex justify-between h-16">
                <div class="flex">
                    
                    <button @click="isSidebarOpen = !isSidebarOpen" class="hidden lg:block p-1 my-3 text-sky-500 transition-colors duration-200 rounded-md hover:text-sky-500 hover:bg-sky-100 dark:hover:text-light dark:hover:bg-sky-700 dark:bg-dark focus:outline-none focus:ring">
                        <span class="sr-only">Toggle main manu</span>
                        <span aria-hidden="true">
                            <svg x-show="!isSidebarOpen" class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg x-show="isSidebarOpen" class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <!-- Logo -->
                    <div class="flex items-center lg:ml-4">
                        <a href="{{route('admin.dashboard')}}">
                            <img class="h-10 w-auto sm:h-12 cursor-pointer duration-300 transform hover:scale-110 transition ease-linear inline" src="{{asset('img/logos/logo-bitmovil-negro.png')}}" alt="">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex sm:justify-center">
                        
                        {{-- <x-nav-link class=" cursor-pointer text-gray-700 hover:text-black dark:hover:text-white px-3 py-1 text-sm font-medium" 
                                        @click="openSettingsPanel" 
                                        :active="request()->routeIs('/')">
                            <i class="fa fa-plus mr-2"></i> Nuevo Sorteo
                        </x-nav-link> --}}
                      
                        {{-- @if (Auth::user()->hasRole('Admin'))
                            <div x-data="{menuConfig: false}"  @mouseout.away="menuConfig = false">
                                <a x-on:click="menuConfig = !menuConfig" class="h-full cursor-pointer inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium hover:text-black hover:border-gray-300 focus:outline-none focus:text-gray-900 focus:border-gray-300 transition">
                                    <i class="far fa-comment-alt mr-1"></i> TravelGenie <i class="fa fa-angle-down ml-2"></i>
                                </a>
                                <div class="absolute" x-show="menuConfig">
                                    <ul class="bg-white w-56 rounded shadow overflow-hidden">
        
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Menu de TravelGenie
                                        </div>
        
                                        <li class="hover:bg-sky-50">
                                            <a href="" class="w-full px-4 py-2 text-sm flex items-center">
                                                <i class="far fa-comment-alt self-center mr-1 hover:text-black"></i> TravelGenie
                                            </a>
                                        </li>

                                        <li class="hover:bg-sky-50">
                                            <a href="" class="w-full px-4 py-2 text-sm flex items-center">
                                                <i class="far fa-list-alt self-center mr-1 hover:text-black"></i> Historial de Conversaciones
                                            </a>
                                        </li>
        
                                    </ul>
                                </div>
                            </div>
                        @else
                            <x-nav-link class=" text-gray-700 hover:text-black dark:hover:text-white px-3 py-1 text-sm font-medium" 
                                            href="" 
                                            :active="request()->routeIs('chat-gpt')">
                                <i class="far fa-comment-alt mr-2"></i> TravelGenie
                            </x-nav-link>
                        @endif --}}

                    </div>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">
                            <x-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                            {{ Auth::user()->currentTeam->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="w-60">
                                        <!-- Team Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>

                                        <!-- Team Settings -->
                                        <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-dropdown-link>
                                        @endcan

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif

                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        @auth                        
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-9 w-9 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Administrador de Cuenta
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        Perfil
                                    </x-dropdown-link>
                                    
                                    @can('Ver dashboard')
                                        <x-dropdown-link href="/">
                                            Dashboard
                                        </x-dropdown-link>
                                    @endcan

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        @else
                            <a href="{{ route('login') }}" class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-4 bg-gray-100 hover:bg-gray-200 text-sm text-gray-800 font-medium rounded-lg transition duration-200 border border-gray-300"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                        @endauth
                    </div>
                </div>
                
            </div>
        </div>
        {{-- Fin Menu jetstream --}}

        <!-- Backdrop -->
        <div
            x-transition:enter="transition duration-300 ease-in-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition duration-300 ease-in-out"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-show="isSidebarOpen"
            @click="isSidebarOpen = false"
            class="fixed inset-0 z-10 bg-sky-800"
            style="opacity: 0.5"
            aria-hidden="true"
        ></div>

        <div class="absolute h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <aside
            x-show="isSidebarOpen"
            x-transition:enter="transition-all transform duration-300 ease-in-out"
            x-transition:enter-start="-translate-x-full opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition-all transform duration-300 ease-in-out"
            x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="-translate-x-full opacity-0"
            x-ref="sidebar"
            @keydown.escape="isSidebarOpen"
            tabindex="-1"
            class="fixed inset-y-0 z-10 flex-shrink-0 w-72 bg-white border-r dark:border-sky-800 dark:bg-darker focus:outline-none"
        >
            <div class="flex flex-col h-full">
            <!-- Sidebar links -->
            <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
                
                <span class="px-4 py-2 text-gray-500 text-xs uppercase">Menu Principal</span>

                <a
                    href="https://elportalviajes.com/asdfasdfasdf/"
                    target="_blank"
                    role="menuitem"
                    class="block py-2 px-4 text-gray-700 transition-colors rounded-md dark:text-light hover:bg-sky-100 dark:hover:bg-sky-600"
                >
                    <i class="fas fa-inbox mr-2"></i> Consultas Recibidas
                </a>

                <a
                    href="{{route('admin.frecuent.questions.index')}}"
                    role="menuitem"
                    class="block py-2 px-4 text-gray-700 transition-colors rounded-md dark:text-light hover:bg-sky-100 dark:hover:bg-sky-600"
                >
                    <i class="far fa-question-circle mr-2"></i> Preguntas Frecuentes
                </a>

                <a
                    href="{{route('admin.reviews.index')}}"
                    role="menuitem"
                    class="block py-2 px-4 text-gray-700 transition-colors rounded-md dark:text-light hover:bg-sky-100 dark:hover:bg-sky-600"
                >
                    <i class="far fa-comment-dots mr-2"></i> Reseñas
                </a>

                @if (Auth::user()->hasRole('Admin'))
                    <div class="mt-4">
                        <span class="px-4 py-2 text-gray-500 text-xs uppercase">Menu de Configuración</span>
                    </div>

                    <!-- Usuarios links -->
                    <div x-data="{ isActive: false, open: false}">
                        <!-- active & hover classes 'bg-sky-100 dark:bg-sky-600' -->
                        <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="flex items-center p-2 text-gray-700 transition-colors rounded-md dark:text-light hover:bg-sky-100 dark:hover:bg-sky-600"
                            :class="{'bg-sky-100 dark:bg-sky-600': isActive || open}"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'"
                        >
                        <i class="fas fa-users-cog mx-2"></i> Usuarios </span>
                            <span class="ml-auto" aria-hidden="true">
                            <!-- active class 'rotate-180' -->
                            <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </span>
                        </a>
                        <div role="menu" x-show="open" class="mt-2 px-7" aria-label="Dashboards">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                                href="{{route('admin.users.create')}}"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-500 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                            >
                                <i class="fa fa-plus mr-2"></i> Agregar Usuario
                            </a>
                            <a
                                href="{{route('admin.users.index')}}"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-500 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                                <i class="fa fa-list mr-2"></i> Listado de Usuarios
                            </a>
                            <a
                                href="{{route('admin.roles.index')}}"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-500 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                                <i class="fa fa-users-cog mr-2"></i> Listado de Roles
                            </a>
                            <a
                                href="{{route('admin.permisos.index')}}"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-500 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                                <i class="fa fa-users-cog mr-2"></i> Listado de Permisos
                            </a>
                        </div>
                    </div>

                    <div x-data="{ isActive: false, open: false}">
                        <!-- active & hover classes 'bg-sky-100 dark:bg-sky-600' -->
                        <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="flex items-center p-2 text-gray-700 transition-colors rounded-md dark:text-light hover:bg-sky-100 dark:hover:bg-sky-600"
                            :class="{'bg-sky-100 dark:bg-sky-600': isActive || open}"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'"
                        >
                        <i class="fas fa-cogs mx-2"></i> Configuraciones General </span>
                            <span class="ml-auto" aria-hidden="true">
                            <!-- active class 'rotate-180' -->
                            <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </span>
                        </a>
                        <div role="menu" x-show="open" class="mt-2 px-4" aria-label="Dashboards">
                            <a
                               href="{{route('admin.solutions.index')}}"
                               role="menuitem"
                               class="block p-2 text-sm text-gray-500 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                           >
                               <i class="fas fa-lightbulb mr-2"></i> Listado de <b>Soluciones</b>
                           </a>
                           <a
                               href="{{route('admin.services.index')}}"
                               role="menuitem"
                               class="block p-2 text-sm text-gray-500 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                           >
                               <i class="fas fa-briefcase mr-2"></i> Listado de <b>Servicios</b>
                           </a>
                           <a
                               href="{{route('admin.pages.index')}}"
                               role="menuitem"
                               class="block p-2 text-sm text-gray-500 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                           >
                               <i class="fas fa-globe mr-2"></i> Listado de <b>Paginas</b>
                           </a>
                        </div>
                    </div>
                @endif
            </nav>

            <!-- Sidebar footer -->
            <div class="relative flex items-center justify-center flex-shrink-0 px-2 py-4 space-x-4">
                <!-- Search button -->
                {{-- <button
                @click="openSearchPanel"
                class="p-2 text-sky-400 transition-colors duration-200 rounded-full bg-sky-50 hover:text-sky-600 hover:bg-sky-100 dark:hover:text-light dark:hover:bg-sky-700 dark:bg-dark focus:outline-none focus:bg-sky-100 dark:focus:bg-sky-700 focus:ring-sky-800"
                >
                <span class="sr-only">Open search panel</span>
                <svg
                    class="w-7 h-7"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                </svg>
                </button> --}}

                <!-- User avatar button -->
                <div class="" x-data="{ open: false }">
                <button
                    @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                    type="button"
                    aria-haspopup="true"
                    :aria-expanded="open ? 'true' : 'false'"
                    class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100"
                >
                    <span class="sr-only">User menu</span>
                    

                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img
                            class="w-10 h-10 rounded-full"
                            src="{{ Auth::user()->profile_photo_url }}"
                            alt="Ahmed Kamel"
                        />
                    @else
                        <img
                            class="w-10 h-10 rounded-full"
                            src="{{asset('img/home/profile-default.png')}}"
                            alt="Ahmed Kamel"
                        />
                    @endif
                </button>

                <!-- User dropdown menu -->
                <div
                    x-show="open"
                    x-ref="userMenu"
                    x-transition:enter="transition-all transform ease-out"
                    x-transition:enter-start="-translate-y-1/2 opacity-0"
                    x-transition:enter-end="translate-y-0 opacity-100"
                    x-transition:leave="transition-all transform ease-in"
                    x-transition:leave-start="translate-y-0 opacity-100"
                    x-transition:leave-end="-translate-y-1/2 opacity-0"
                    class="absolute max-w-xs py-1 bg-white rounded-md shadow-lg min-w-max left-5 right-5 bottom-full ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                    tabindex="-1"
                    role="menu"
                    aria-orientation="vertical"
                    aria-label="User menu"
                >
                    <a
                    href="{{route('profile.show')}}"
                    role="menuitem"
                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-sky-600"
                    >
                        Perfil
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    
                </div>
                </div>

                <!-- Settings button -->
                <button
                @click="openSettingsPanel"
                id="buttonSettingsPanel"
                class="p-2 text-sky-400 transition-colors duration-200 rounded-full bg-sky-50 hover:text-sky-600 hover:bg-sky-100 dark:hover:text-light dark:hover:bg-sky-700 dark:bg-dark focus:outline-none focus:bg-sky-100 dark:focus:bg-sky-700 focus:ring-sky-800"
                >
                <span class="sr-only">Open settings panel</span>
                <svg
                    class="w-7 h-7"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                    />
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                </svg>
                </button>
            </div>
            </div>
        </aside>

        <!-- Sidebars buttons -->
        <div class="fixed flex items-center space-x-4 top-3 right-5 lg:hidden">
            <button
            @click="isSidebarOpen = !isSidebarOpen"
            class="p-1 border border-sky-2000 text-sky-500 transition-colors duration-200 rounded-md bg-gray-50 hover:text-sky-500 hover:bg-sky-100 dark:hover:text-light dark:hover:bg-sky-700 dark:bg-dark focus:outline-none focus:ring"
            >
            <span class="sr-only">Toggle main manu</span>
            <span aria-hidden="true">
                <svg
                    x-show="!isSidebarOpen"
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg
                    x-show="isSidebarOpen"
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
            </button>
        </div>

        <!-- Settings Panel -->
        <!-- Backdrop -->
        <div
            x-transition:enter="transition duration-300 ease-in-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition duration-300 ease-in-out"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-show="isSettingsPanelOpen"
            @click="isSettingsPanelOpen = false"
            class="fixed inset-0 z-10 bg-sky-800"
            style="opacity: 0.5"
            aria-hidden="true"
        ></div>
        <!-- Panel  Izquierda-->
        <section
            x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            x-ref="settingsPanel"
            tabindex="-1"
            x-show="isSettingsPanelOpen"
            @keydown.escape="isSettingsPanelOpen = false"
            class="fixed inset-y-0 right-0 z-20 w-full max-w-sm bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-lg focus:outline-none"
            aria-labelledby="settinsPanelLabel"
        >
            <div class="absolute left-0 p-2 transform -translate-x-full">
            <!-- Close button -->
            <button
                @click="isSettingsPanelOpen = false"
                class="p-2 text-white rounded-md focus:outline-none focus:ring"
            >
                <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <!-- Panel content -->
            <div class="flex flex-col h-screen">
            <!-- Panel header -->
            <div
                class="flex flex-col items-center justify-center bg-gray-100  flex-shrink-0 px-2 py-4 space-y-4 border-b dark:border-sky-700"
            >
                <h2 id="settinsPanelLabel" class="text-lg font-medium text-gray-700 dark:text-light"> <i class="fa fa-plus mr-2"></i>Alta de <b>Solicitud de Cotización</b></h2>
            </div>
            <!-- Content -->
            <div class="flex-1 overflow-hidden hover:overflow-y-auto">
                <!-- Theme -->
                <div class="p-4 space-y-4 md:p-8">
                    {{-- @livewire('agregar-solicitud-component') --}}
                </div>
            </div>
            </div>
        </section>

        <!-- Search panel -->
        <!-- Backdrop -->
        <div
            x-transition:enter="transition duration-300 ease-in-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition duration-300 ease-in-out"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-show="isSearchPanelOpen"
            @click="isSearchPanelOpen = false"
            class="fixed inset-0 z-10 bg-sky-800"
            style="opacity: 0.5"
            aria-hidden="ture"
        ></div>
        <!-- Panel -->
        <section
            x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            x-show="isSearchPanelOpen"
            @keydown.escape="isSearchPanelOpen = false"
            class="fixed inset-y-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
        >
            <div class="absolute right-0 p-2 transform translate-x-full">
            <!-- Close button -->
            <button @click="isSearchPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
                <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>

            <h2 class="sr-only">Search panel</h2>
            <!-- Panel content -->
            <div class="flex flex-col h-screen">
            <!-- Panel header (Search input) -->
            <div
                class="relative flex-shrink-0 px-4 py-8 text-gray-400 border-b dark:border-sky-800 dark:focus-within:text-light focus-within:text-gray-700"
            >
                <span class="absolute inset-y-0 inline-flex items-center px-4">
                <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                </svg>
                </span>
                <input
                x-ref="searchInput"
                type="text"
                class="w-full py-2 pl-10 pr-4 border rounded-full dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring"
                placeholder="Search..."
                />
            </div>

            <!-- Panel content (Search result) -->
            <div class="flex-1 px-4 pb-4 space-y-4 overflow-y-hidden h hover:overflow-y-auto">
                <h3 class="py-2 text-sm font-semibold text-gray-600 dark:text-light">History</h3>
                <p class="px=4">Search resault</p>
                <!--  -->
                <!-- Search content -->
                <!--  -->
            </div>
            </div>
        </section>
        </div>
    </div>
</nav>


@push('script')
    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                this.isDark = !this.isDark
                setTheme(this.isDark)
                },
                setLightTheme() {
                this.isDark = false
                setTheme(this.isDark)
                },
                setDarkTheme() {
                this.isDark = true
                setTheme(this.isDark)
                },
                watchScreen() {
                if (window.innerWidth <= 1024) {
                    this.isSidebarOpen = false
                    this.isSecondSidebarOpen = false
                } else if (window.innerWidth >= 1024) {
                    this.isSidebarOpen = true
                    this.isSecondSidebarOpen = true
                }
                },
                isSidebarOpen: false,
                toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
                },
                isSecondSidebarOpen: window.innerWidth >= 1024 ? true : false,
                toggleSecondSidbarColumn() {
                this.isSecondSidebarOpen = !this.isSecondSidebarOpen
                },
                isSettingsPanelOpen: false,
                openSettingsPanel() {
                this.isSettingsPanelOpen = true
                this.$nextTick(() => {
                    this.$refs.settingsPanel.focus()
                })
                },
                isSearchPanelOpen: false,
                openSearchPanel() {
                this.isSearchPanelOpen = true
                this.$nextTick(() => {
                    this.$refs.searchInput.focus()
                })
                },
            }
        }
    </script>
@endpush