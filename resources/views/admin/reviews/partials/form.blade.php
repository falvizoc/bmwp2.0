<div class="mb-4">
    {!! Form::label('name', __('Nombre')) !!}
    {!! Form::text('name', null , ['id' => 'name', 'class' => 'form-control border-gray-300 rounded-md text-sm shadow-sm', 'placeholder' => 'Ingrese el Nombre', 'disabled'  => $disabled]) !!}
    
    @error('name')
        <span class="text-red-500">{{$message}}</span>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('company', __('Empresa')) !!}
    {!! Form::text('company', null , ['id' => 'company', 'class' => 'form-control border-gray-300 rounded-md text-sm shadow-sm', 'placeholder' => 'Ingrese el Nombre', 'disabled'  => $disabled]) !!}
    
    @error('company')
        <span class="text-red-500">{{$message}}</span>
    @enderror
</div>

<div class="mt-4 ckeditor">
    <div class="mb-2">
        {!! Form::label('description', 'Descripción de la Reseña') !!}
    </div>
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-2' . ($errors->has('description') ? ' border-red-600' : ''), 'placeholder' => 'Detalle la Reseña']) !!}
                
    @error('description')
        <span class="text-red-500">{{$message}}</span>
    @enderror
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
