<x-guest-layout>

    <!-- component -->
<section class="flex flex-col md:flex-row h-screen items-center p-10 md:p-0">

    <div class="hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      {{-- <img src="{{asset('img/home/inktinerante-1.jpg')}}" alt="" class="w-full h-full object-cover"> --}}
	  <div class="w-full h-full bg-cover bg-center" style="background-image: url({{asset('img/carousel-ms.jpg')}})">
        <div class="relative w-full h-full bg-black bg-opacity-60 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold mb-4">Soluciones Tecnológicas de Vanguardia</h1>
                <p class="text-xl mb-6">Innovamos en cada paso para transformar tu experiencia digital.</p>
                <a href="/" class="mt-4 inline-block px-6 py-3 bg-sky-500 hover:bg-sky-600 rounded-full text-white font-semibold">
                    Volver a Bitmovil
                </a>
            </div>
        </div>
      </div>
    </div>
  
    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">
  
        <div class="w-full h-100">

            <div class="items-center text-center">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex">
                    <img class="h-12 w-auto md:h-16" src="{{asset('img/logos/logo-bitmovil-negro.png')}}" alt="">
                </a>
                <h1 class="text-xl md:text-base leading-tight mb-4">¡Bienvenido de nuevo!</h1>
            </div>
            
            <x-validation-errors class="mb-4" />
    
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div>
                        <x-label for="email" value="Correo" class="text-white" />
                        <x-input id="email" class="w-full px-4 py-3 rounded-lg bg-gray-100 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" type="email" name="email" :value="old('email')" required autofocus placeholder="Ingrese su correo" />
                    </div>
        
                    <div class="mt-2">
                        <x-label for="password" value="Contraseña" class="text-white" />
                        <x-input id="password" class="w-full px-4 py-3 rounded-lg bg-gray-100 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" type="password" name="password" required autocomplete="current-password" placeholder="Ingrese su contraseña" />
                    </div>
        
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-black">Mantener sesión activa</span>
                        </label>
                    </div>
        
                <div class="text-right mt-2">
                    <a href="{{ route('password.request') }}" class="text-sm text-black hover:underline">Olvidaste tu contraseña?</a>
                </div>
        
                <button type="submit" class="block bg-sky-500 hover:bg-sky-500 text-white ml-auto rounded-md
                        px-4 py-2 mt-6">Iniciar sesión
                </button>
        
            </form>
  
      </div>
    </div>
  
  </section>

</x-guest-layout>
