<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
</head>
<body>


@extends('contenido.userp')

@section('content')
    <h1>Perfil de Usuario</h1>

    @if(isset($usuario))
        <p>Usuario: {{ $usuario->usuario }}</p>
        <p>Email: {{ $usuario->email }}</p>
        <!-- Botón para editar -->
        <a href="{{ route('perfil.editar', $usuario->id) }}">Editar Perfil</a>
    @else
        <p>No se ha encontrado el usuario.</p>
    @endif
@endsection

@section('editar')
    <h1>Editar Perfil</h1>



    @if(isset($usuario))
    <form action="{{ route('perfil.actualizar', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" value="{{ $usuario->usuario }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $usuario->email }}" required><br><br>

        <button type="submit">Guardar Cambios</button>
    </form>
@else
    <p>No se ha encontrado el usuario.</p>
@endif



</body>
</html>