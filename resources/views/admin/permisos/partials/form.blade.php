<div class="grid lg:grid-cols-2 gap-6 mb-4">
    <div>
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['placeholder' => 'Ingrese el nombre del permiso', 'class' => 'rounded-md border border-gray-300 cursor-pointer mt-1 w-full' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
        @error('name')
            <span class="text-red-500">{{$message}}</span>
        @enderror
    </div>

    <div>
        {!! Form::label('description', 'Descripcion') !!}
        {!! Form::text('description', null, ['placeholder' => 'Ingrese la Descripcion del permiso', 'class' => 'rounded-md border border-gray-300 cursor-pointer mt-1 w-full' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
        @error('description')
            <span class="text-red-500">{{$message}}</span>
        @enderror
    </div>
</div>
