<div class="container py-8">

  <x-table-responsive>

      <table class="min-w-full divide-y divide-gray-200 border-t border-gray-200">
          <thead class="bg-gray-100">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                Nombre
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                Correo
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                Acciones
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

              @forelse ($users as $user)
              <tr>
                  <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>

                  <td class="px-6 py-4 text-right text-sm font-medium flex gap-1 float-left">
                    <a href="{{route('admin.users.edit',$user)}}" class="inline-flex items-center px-4 py-2 bg-orange-400 duration-300 transform hover:bg-orange-500 text-white text-sm font-medium rounded-md">
                      <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                      @csrf
                      @method('delete')

                      <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 duration-300 transform hover:bg-red-600 text-white text-sm font-medium rounded-md">
                        <i class="fa fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                  <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-gray-700" colspan="5">No se encontraron resultados.</td>
                  </tr>
              @endforelse
            
            <!-- More people... -->
          </tbody>
      </table>
      
      <div class="px-6 py-4">
          {{$users->links()}}
      </div>

  </x-table-responsive>

</div>
