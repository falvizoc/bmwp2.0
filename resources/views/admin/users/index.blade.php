<x-admin-layout>
    
    <div class="container">
        <x-alert-message />
    </div>

    <section>
        <div class="container mt-8 flex items-center justify-center">
            
            <div class="flex-1">
                <h2 class="text-xl text-gray-800"><i class="fas fa-users"></i> Listado de <b>Usuarios</b></h2>
                <p class="text-gray-700">Encuentre aquí el listado de usuarios y estudiantes de la plataforma</p>
            </div>

            <a type="button" href="{{route('admin.users.create')}}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white duration-300 transform hover:bg-green-600 text-sm font-medium rounded-md">
                <i class="fa fa-plus mr-2"></i>
                Nuevo Usuario
            </a>
        </div>
    </section>

    @livewire('admin.users-index')

</x-admin-layout>