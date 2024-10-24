<x-admin-layout>
    
    <div class="container">
        <x-alert-message />
    </div>

    <section>
        <div class="container mt-8 flex items-center justify-center">
            
            <div class="flex-1">
                <h2 class="text-xl text-gray-800"><i class="fas fa-users-cog"></i> Listado de <b>Roles</b></h2>
                <p class="text-gray-700">Encuentre aquí el listado de <b>Roles</b> que usa la aplicación para su mejor seguridad</p>
            </div>

            <a type="button" href="{{route('admin.roles.create')}}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white duration-300 transform hover:bg-green-600 text-sm font-medium rounded-md">
                <i class="fa fa-plus mr-2"></i>
                Nuevo Rol
            </a>
        </div>
    </section>

    <div class="container py-8">

        <x-table-responsive>
    
            <table class="min-w-full divide-y divide-gray-200 border-t border-gray-200">
                <thead class="bg-gray-100">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                      Acciones
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                      Id
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                      Nombre
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
    
                    @forelse ($roles as $role)
                    <tr>
                        <td class="px-6 py-4 text-right text-sm font-medium flex gap-1 float-left">
                          <a href="{{route('admin.roles.edit',$role)}}" class="inline-flex items-center px-4 py-2 bg-orange-400 duration-300 transform hover:bg-orange-500 text-white text-sm font-medium rounded-md">
                            <i class="fa fa-edit"></i>
                          </a>
                          <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                            @csrf
                            @method('delete')
    
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 duration-300 transform hover:bg-red-600 text-white text-sm font-medium rounded-md">
                              <i class="fa fa-trash-alt"></i>
                            </button>
                          </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$role->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$role->name}}</td>
                      </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700" colspan="3">No se encontraron resultados.</td>
                        </tr>
                    @endforelse
                  
                  <!-- More people... -->
                </tbody>
            </table>
            
        </x-table-responsive>
    
    </div>

</x-admin-layout>
