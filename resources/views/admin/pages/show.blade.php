<x-admin-layout>

    <section>
        <div class="container mt-8 flex items-center justify-center">
            <div class="flex-1">
                <h2 class="text-xl text-gray-800"><i class="fas fa-EYE"></i> Visualización de <b>Pagina</b></h2>
                <p class="text-gray-700">Formulario de visualización de <b>Pagina</b></p>
            </div>
            <a type="button" href="{{route('admin.pages.index')}}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white duration-300 transform hover:bg-blue-600 text-sm font-medium rounded-md">
                <i class="fa fa-arrow-left mr-2"></i>
                Volver al Listado
            </a>
        </div>
    </section>

    <div class="container py-8">
        <div class="bg-white rounded shadow-lg px-8 py-6 mb-6 border-t-2 border-blue-400">

            {!! Form::model($Pagina, ['route' => ['admin.pages.update', $Pagina], 'method' => 'put', 'files' => true]) !!}
                
                @include('admin.pages.partials.form', ['disabled' => true])

                <div class="w-full border-t border-gray-200 pt-4 text-right">
                    <a type="button" href="{{route('admin.pages.index')}}" color="" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-100 text-gray-800 duration-300 transform hover:bg-gray-200 text-sm font-medium rounded-md">
                        <i class="fa fa-arrow-left mr-2"></i> Volver al Listado
                    </a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>


    @push('script')
        <script>
            // Cambiar Imagen
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event){

                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("imagen").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }

            function cambiarImagenMiniature(event){

                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("imagen_miniature").setAttribute('src', event.target.result);
                };

                reader.readAsDataURL(file);
            }
        </script>
    @endpush

</x-admin-layout>