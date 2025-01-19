<div>
    <footer class="bg-primary">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
          <div class="">
            <div class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-6">
              <div class="col-span-2 md:col-span-6 flex items-center justify-between mb-4">
                <div class="flex gap-6">
                  <img src="{{asset('img/logos/favicon_192x192.png')}}" class="h-10 object-cover object-center" alt="">
                  <h2 class="text-base md:text-2xl font-light text-white flex-1 max-w-sm">
                    Mejoramos todos tus <b>procesos productivos</b> con <b>Tecnología</b>.
                  </h2>
                </div>
                <ul class="col-span-2 flex justify-start gap-2 lg:col-span-5 lg:justify-end">
                    <li>
                        <a target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=5218332272527&amp;text=%C2%A1Hola!%20Bitmovil." class="inline-flex items-center justify-center w-8 h-8 text-indigo-100  rounded-full focus:shadow-outline bg-green-500 hover:scale-105 cursor-pointer transition ease-in duration-200" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp text-white text-base md:text-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" rel="nofollow" href="https://www.facebook.com/BitmovilMx" class="inline-flex items-center justify-center w-8 h-8 text-indigo-100  rounded-full focus:shadow-outline bg-blue-700 hover:scale-105 cursor-pointer transition ease-in duration-200" aria-label="Instagram">
                            <i class="fab fa-facebook-f text-white text-sm md:text-base"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" rel="nofollow" href="https://www.linkedin.com/company/bitmovil" class="inline-flex items-center justify-center w-8 h-8 text-indigo-100 rounded-full focus:shadow-outline bg-blue-500 hover:scale-105 cursor-pointer transition ease-in duration-200" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-white text-sm md:text-base"></i>
                        </a>
                    </li>
                  </ul>
              </div>
              
              @if ($solutions->count())
                @foreach ($solutions as $solution)
                  <div class="col-span-2 sm:col-span-1">
                    
                      @if ($solution->services->count())

                          <p class="font-medium text-white">
                              <span>{{ $solution->name }}</span>
                          </p>

                          <ul class="mt-6 space-y-4 text-sm">
                              @foreach ($solution->services as $service)
                                  <li>
                                      <a href="{{route('servicios.'.$service->slug)}}" class="text-white transition hover:opacity-75"> 
                                          <span>{{ $service->name }}</span>
                                      </a>
                                  </li>
                              @endforeach
                          </ul>
                      @else
                          <a href="{{route('servicios.'.$solution->slug)}}" class="font-medium text-white flex items-center space-x-2">
                              <span>
                                  {{ $solution->name }}
                              </span>
                              <i class="fas fa-arrow-right ml-auto text-white text-sm transition-transform duration-200"></i>
                          </a>
                      @endif
                  </div>
                @endforeach
              @endif
             
            </div>
          </div>
      
          <div class="mt-8 border-t border-gray-100 pt-8">
            <div class="sm:flex sm:justify-between">
              <p class="text-xs text-white">&copy; 2024. Bitmovil. Todos los derechs reservados.</p>
      
              <ul class="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end">
                <li>
                  <a href="#" class="text-white transition hover:opacity-75"> Aviso de privacidad </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </footer>
</div>
