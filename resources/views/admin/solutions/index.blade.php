<x-admin-layout>
    
    <div class="container">
        <x-alert-message />
    </div>

    <section>
        <div class="container mt-8 flex items-center justify-center">
            
            <div class="flex-1">
                <h2 class="text-xl text-gray-800"><i class="fas fa-lightbulb"></i> Listado de <b>Soluciones</b></h2>
                <p class="text-gray-700">Encuentre aquí el listado de <b>Soluciones</b> de la plataforma</p>
            </div>

            <a type="button" href="{{route('admin.solutions.create')}}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white duration-300 transform hover:bg-green-600 text-sm font-medium rounded-md">
                <i class="fa fa-plus mr-2"></i>
                Nuevo Solución
            </a>
        </div>
    </section>

    <div class="py-8">
        <div class="container">
            @livewire('admin.tables.solution-table')
        </div>
    </div>

</x-admin-layout>