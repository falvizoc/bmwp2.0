<x-admin-layout>

    <section>
        <div class="container mt-8 flex items-center justify-center">
            <div class="flex-1">
                <h2 class="text-xl text-gray-800"><i class="fas fa-edit"></i> Edición de <b>Servicio</b></h2>
                <p class="text-gray-700">Formulario de edición de <b>Servicio</b></p>
            </div>
            <a type="button" href="{{route('admin.services.index')}}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white duration-300 transform hover:bg-blue-600 text-sm font-medium rounded-md">
                <i class="fa fa-arrow-left mr-2"></i>
                Volver al Listado
            </a>
        </div>
    </section>

    <div class="container py-8">
        <div class="bg-white rounded shadow-lg px-8 py-6 mb-6 border-t-2 border-orange-400">

            {!! Form::model($service, ['route' => ['admin.services.update', $service], 'method' => 'put', 'files' => true]) !!}
                
                @include('admin.services.partials.form', ['disabled' => false])

                <div class="w-full border-t border-gray-200 pt-4 text-right">
                <a type="button" href="{{route('admin.services.index')}}" color="" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-100 text-gray-800 duration-300 transform hover:bg-gray-200 text-sm font-medium rounded-md">
                    <i class="fa fa-times mr-2"></i> Cancelar
                </a>
                    <button type="submit" color="" class="inline-flex items-center px-4 py-2 bg-orange-500 text-white duration-300 transform hover:bg-orange-600 text-sm font-medium rounded-md">
                        <i class="fa fa-save mr-2"></i> Aplicar Cambios
                    </button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</x-admin-layout>
