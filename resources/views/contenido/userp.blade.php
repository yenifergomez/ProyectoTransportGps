<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Mperfil.css') }}" />

    <title>Mi Perfil</title>
</head>
<body>






<!-- FOTO DE PERFIL -->
<form method="POST" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="profile_image">
    <button type="submit">Guardar</button>
</form>


@if(Auth::user()->profile_image)
    <img src="{{ asset(Auth::user()->profile_image) }}" alt="Perfil">
@else
    <p>No has subido una imagen de perfil todavía.</p>
@endif



<!-- EDITAR PERFIL -->
<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" value="{{ Auth::user()->usuario }}">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ Auth::user()->email }}">

    <button type="submit">Actualizar perfil</button>
</form>





<a href="{{ route('logout.get') }}">Cerrar sesión</a>


</body>
</html>