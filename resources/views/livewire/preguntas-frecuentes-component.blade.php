<div>
    <section class="py-10 md:py-16 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="mx-auto">
                <div class="text-center mb-6 flex flex-col items-center">
                    <span class="inline-block mb-5 px-3 py-1.5 text-xs uppercase font-semibold bg-green-500 text-white rounded-full tracking-widest">
                        ¿Alguna duda?
                    </span>
                    <h2 class="mb-4 text-2xl md:text-4xl leading-tight">
                        Preguntas Frecuentes
                    </h2>
                    <p class="mb-6 text-gray-700 leading-relaxed text-base md:text-lg">
                        Encuentra respuestas rápidas a las dudas más comunes sobre nuestros productos y servicios en esta sección.
                    </p>
                    <div class="max-w2xl mb-6">
                        <div class="relative w-full">
                            <i class="absolute fa fa-search text-gray-400 top-4 left-4"></i>
                            <input wire:model.live="search" class="text-sm md:text-base w-96 border border-gray-400 focus:border-celeste px-10 h-12 rounded-xl shadow-sm" type="text" placeholder="Filtra aquí la pregunta frecuente.." autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col items-center">
              <div class="md:max-w-3xl">
                <div class="flex flex-wrap">

                  @forelse ($preguntas_frecuentes as $index => $pregunta_frecuente)
                        <button x-data="{ accordion{{ $index }}: false }" x-on:click.prevent="accordion{{ $index }} = !accordion{{ $index }}" class="flex w-full py-4 px-8 mb-4 items-start justify-between text-left bg-white shadow-md rounded-2xl hover:cursor-pointer">
                            <div class="pr-5">
                                <h5 class="text-base md:text-lg font-regular" :class="{'underline decoration-primary decoration-2' : accordion{{ $index }} == true}">
                                    <i class="fa fa-info-circle text-primary mr-1"></i> {{$pregunta_frecuente->title}}
                                </h5>
                                <div x-ref="container{{ $index }}" :style="accordion{{ $index }} ? 'height: ' + $refs['container' + {{ $index }}].scrollHeight + 'px' : ''" class="overflow-hidden h-0 duration-500" style="">
                                    <div class="ckeditor text-gray-700 mt-4">
                                        {!!$pregunta_frecuente->description!!}
                                    </div>
                                </div>
                            </div>
                            <span class="flex-shrink-0">
                                <div :class="{'hidden': accordion{{ $index }}}" class="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="svg-30de18-1">
                                        <path d="M12 5.69995V18.3" stroke="#0a4c98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.69995 12H18.3" stroke="#0a4c98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>   
                                </div>
                                <div :class="{'hidden': !accordion{{ $index }}}" class="hidden">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-config-id="svg-30de18-2">
                                        <path d="M5.69995 12H18.3" stroke="#0a4c98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>  
                                </div>    
                            </span>                       
                        </button>
                    @empty
                        <div class="w-full p-8 rounded-3xl bg-white border border-gray-200">
                            <p class="text-base md:text-xl font-semibold">
                                No se encontraron resultados 😕
                            </p>
                            <p>
                                Prueba con otros parametros de busqueda.
                            </p>
                        </div>
                    @endforelse

                    <div class="container px-2 py-4">
                        {{$preguntas_frecuentes->links()}}
                    </div>
                </div>
              </div>
            </div>
        </div>
      </section> 
</div>
