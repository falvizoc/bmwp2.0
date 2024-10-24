<table>
    <thead>
    <tr>
        <th style="font-weight: bold">ID</th>
        <th style="font-weight: bold">Nombre</th>
        <th style="font-weight: bold">Email</th>
        <th style="font-weight: bold">Celular </th>
        <th style="font-weight: bold">Tipo de Usuario</th>
        <th style="font-weight: bold">Fecha de Alta</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->celular }}</td>
            <td>{{ $user->tipo_de_usuario->nombre }}</td>
            <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>