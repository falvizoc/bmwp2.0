<x-admin-layout>

    <div class="container">
        <x-alert-message />
    </div>

    <section>
        <div class="container mt-8 flex items-center justify-center">
            <div class="flex-1">
                <h2 class="font-semibold text-xl text-gray-800"><i class="fas fa-plus"></i> Alta de <b>Pregunta Frecuente</b></h2>
                <p class="text-gray-700">Formulario de Alta de <b>Pregunta Frecuente</b></p>
            </div>
            <a type="button" href="{{route('admin.frecuent.questions.index')}}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white duration-300 transform hover:bg-blue-600 text-sm font-medium rounded-md">
                <i class="fa fa-arrow-left mr-2"></i>
                Volver al Listado
            </a>
        </div>
    </section>


    <div class="container py-8">
        <div class="bg-white rounded shadow-lg px-8 py-6 mb-6 border-t-2 border-green-400">

            {!! Form::open(['route' => 'admin.frecuent.questions.store']) !!}
                        
            <div class="">
                {{ Form::label('title', 'Titulo ') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'class' => 'cursor-pointer mt-2 block w-full px-3 py-2 text-sm font-normal text-black bg-white bg-clip-padding border border-solid border-gray-400 rounded transition ease-in-out m-0 focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none', 'placeholder' => 'Ingrese el Titulo']) }}

                @error('title')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
                            
            <div class="mt-4 ckeditor">
                <div class="mb-2">
                    {!! Form::label('description', 'Descripción del Curso') !!}
                </div>
                {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-2' . ($errors->has('description') ? ' border-red-600' : ''), 'placeholder' => 'Describa al curso']) !!}
                            
                @error('description')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label>Mostrar en las siguientes <b>Paginas</b></label>
                    <div class="mt-2 bg-gray-50 p-6 rounded-md">
                        @foreach ($paginas as $pagina)
                            <div class="mb-1">
                                <label class="cursor-pointer">
                                    {!! Form::checkbox('paginas[]', $pagina->id, null, ['class' => 'checkbox checkbox-primary m-1 rounded-full']) !!}
                                    {{$pagina->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
            </div>

            <div class="w-full border-t border-gray-200 pt-4 text-right mt-4">
                <a type="button" href="{{route('admin.frecuent.questions.index')}}" color="" class="inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-100 text-gray-800 duration-300 transform hover:bg-gray-200 text-sm font-medium rounded-md">
                    <i class="fa fa-times mr-2"></i> Cancelar
                </a>
                <button type="submit" color="" class="inline-flex items-center px-4 py-2 bg-green-500 text-white duration-300 transform hover:bg-green-600 text-sm font-medium rounded-md">
                    <i class="fa fa-check mr-2"></i> Confirmar
                </button>
            </div>

            {!! Form::close() !!}
                        
        </div>
    </div>

    
    @push('script')
        <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
        <script src="{{asset('js/instructor/cursos/form.js')}}"></script>
    
        <script>
            CKEDITOR.replace('description', {
                height: 180,
                versionCheck: false,
                toolbarGroups: [{
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                    },
                    {
                    "name": "links",
                    "groups": ["links"]
                    },
                    {
                    "name": "paragraph",
                    "groups": ["list", "blocks"]
                    },
                    {
                    "name": "styles",
                    "groups": ["styles"]
                    },
                ],
                removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord'
            });
        </script>
    @endpush

</x-admin-layout>
