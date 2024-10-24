<div class="mb-4">
    {!! Form::label('name', __('Nombre')) !!}
    {!! Form::text('name', null , ['id' => 'name', 'class' => 'form-control border-gray-300 rounded-md text-sm shadow-sm', 'placeholder' => 'Ingrese el Nombre', 'disabled'  => $disabled]) !!}
    
    @error('name')
        <span class="text-red-500">{{$message}}</span>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['id' => 'slug', 'class' => 'form-control border-gray-300 rounded-md text-sm shadow-sm', 'placeholder' => 'Ingrese el slug', 'readonly']) !!}

    @error('slug')
        <span class="text-red-500">{{$message}}</span>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('icon', 'Icono') !!}
    {!! Form::text('icon', null, ['class' => 'form-control border-gray-300 rounded-md text-sm shadow-sm', 'placeholder' => 'Ingrese el icono', 'disabled'  => $disabled]) !!}

    @error('icon')
        <span class="text-red-500">{{$message}}</span>
    @enderror
</div>

@push('script')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endpush
