<div class="grid lg:grid-cols-4 gap-6 mb-4">
                
    <div class="col-span-2">
        <div>
            {{ Form::label('name', 'Nombre ') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'class' => 'bg-gray-50 mt-2 block w-full px-3 py-2 text-sm font-normal text-black bg-white bg-clip-padding border border-solid border-gray-400 rounded transition ease-in-out m-0 focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none', 'placeholder' => 'Ingrese el nombre', 'disabled' => $disabled]) }}

            @error('name')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
    
        <div class="mt-4">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'class' => 'bg-gray-50 mt-2 block w-full px-3 py-2 text-sm font-normal text-black bg-white bg-clip-padding border border-solid border-gray-400 rounded transition ease-in-out m-0 focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none', 'placeholder' => 'Ingrese el Email', 'disabled' => $disabled]) }}
           
            @error('email')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
    
        <div class="mt-4">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['placeholder'=>'Ingrese la contraseña', 'class'=>' bg-gray-50 mt-2 block w-full px-3 py-2 text-sm font-normal text-black bg-white bg-clip-padding border border-solid border-gray-400 rounded transition ease-in-out m-0 focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none', 'id' => 'password', 'disabled' => $disabled] ) }}
            
            @error('password')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
    
    </div>

    <div class="">
        <label class="font-bold"><i class="fa fa-user-secret mr-1"></i> Asignación de Roles</label>
            <div class="mt-2">
                @foreach ($roles as $role)
                    <div class="">
                        <label class="cursor-pointer">
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'checkbox checkbox-primary m-1 rounded-full' , 'disabled' => $disabled]) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach

                @error('roles')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
    </div>

</div>
