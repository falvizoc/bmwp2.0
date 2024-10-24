<div>
    <section class="bg-gray-100 py-16">
        <div class="max-w-md md:max-w-screen-xl px-4 mx-auto text-center">
            <span class="inline-block py-1 px-3 mb-4 text-xs font-semibold uppercase text-blue-600 bg-blue-100 rounded-full">
                Testimonios
            </span>
            <h2 class="text-2xl md:text-4xl font-light tracking-tight text-gray-900 sm:text-4xl">
                Historias de <b>Éxito</b> Empresarial
            </h2>
            <p class="mt-2 text-base md:text-lg text-gray-600">
                Explora casos reales en donde hemos generado mejoras en la productividad de nuestros clientes.
            </p>
        </div>
        <div class="swiffy-slider max-w-screen-lg mx-auto mt-10 text-center slider-nav-autoplay slider-item-nogap" data-slider-nav-autoplay-interval="7000">
            <ul class="slider-container">
                @foreach($reseñas as $reseña)
                    <div>
                        <blockquote class="text-lg md:text-2xl italic font-semibold text-gray-900">
                            {!! $reseña->description !!}
                        </blockquote>
                        <div class="flex justify-center items-center mt-6 space-x-1">
                            <div class="text-sm md:text-base font-bold text-gray-900">{{ $reseña->name }} |</div>
                            <div class="text-sm md:text-base text-gray-500">{{ $reseña->company }}</div>
                        </div>
                    </div>
                @endforeach
            </ul>

            <button type="button" class="slider-nav text-primary"></button>
            <button type="button" class="slider-nav slider-nav-next text-primary"></button>
        </div>
       
    </section>
    
</div>
