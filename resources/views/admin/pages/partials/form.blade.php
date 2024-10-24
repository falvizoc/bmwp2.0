<div class="mb-4">
    {!! Form::label('name', __('Nombre')) !!}
    {!! Form::text('name', null , ['class' => 'form-control border-gray-300 rounded-md text-sm shadow-sm', 'placeholder' => 'Ingrese el Nombre', 'disabled'  => $disabled]) !!}
    
    @error('name')
        <span class="text-red-500">{{$message}}</span>
    @enderror
</div>