<x-admin-layout>

    <section>
        <div class="container mt-8 flex items-center justify-center">
            <div class="flex-1">
                <h2 class="font-semibold text-xl text-gray-800"><i class="fas fa-edit"></i> Edición de <b>Usuario</b></h2>
                <p class="text-gray-700">Formulario de edición de <b>Usuario</b></p>
            </div>
            <a type="button" href="{{route('admin.users.index')}}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white duration-300 transform hover:bg-blue-600 text-sm font-medium rounded-md">
                <i class="fa fa-arrow-left mr-2"></i>
                Nuevo Usuario
            </a>
        </div>
    </section>

    <div class="container">
        <x-alert-message />
    </div>
    
    <div class="container py-8">
        <div class="bg-white rounded shadow-lg px-8 py-6 mb-6 border-t-2 border-orange-400">
            
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                
            @include('admin.users.partials.form', ['disabled' => false])

            <div class="w-full border-t border-gray-200 pt-4 text-right">
              <a type="button" href="{{route('admin.users.index')}}" color="" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-100 text-gray-800 duration-300 transform hover:bg-gray-200 text-sm font-medium rounded-md">
                  <i class="fa fa-times mr-2"></i> Cancelar
              </a>
                <button type="submit" color="" class="inline-flex items-center px-4 py-2 bg-orange-400 text-white duration-300 transform hover:bg-orange-500 text-sm font-medium rounded-md">
                    <i class="fa fa-save mr-2"></i> Guardar cambios
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

</x-admin-layout>