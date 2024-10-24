<div class="grid lg:grid-cols-2 gap-6 mb-4">
    <div>
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['placeholder' => 'Ingrese el nombre', 'class' => 'rounded-md border border-gray-300 cursor-pointer mt-1 w-full' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
        @error('name')
            <span class="text-red-500">{{$message}}</span>
        @enderror
    </div>

    <div class="">
        <label class="font-bold">Asignacón de Roles</label>
            <div class="mt-2">
                @foreach ($permisos as $permiso)
                    <div class="">
                        <label class="cursor-pointer">
                            {!! Form::checkbox('permissions[]', $permiso->id, null, ['class' => 'checkbox checkbox-primary m-1 rounded-full' ]) !!}
                            {{$permiso->description}}
                        </label>
                    </div>
                @endforeach
            </div>
    </div>
</div>
