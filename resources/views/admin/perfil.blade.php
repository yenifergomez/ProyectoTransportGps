<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administracion</title>
</head>
<body>


    <h1>Usuarios Transport GPS</h1>


    @if(isset($users))
    @foreach($users as $user)
        <p>{{$user->usuario}} - {{$user->email}}</p>
        <form action="{{ route('admin.perfil.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="usuario" value="{{ $user->usuario }}">
            <input type="email" name="email" value="{{ $user->email }}">
            <button type="submit">Actualizar</button>
        </form>
    @endforeach
@else
    <p>No hay usuarios disponibles</p>
@endif

    <a href="{{ route('logout.get') }}">Cerrar Sesión</a>

</body>
</html>
