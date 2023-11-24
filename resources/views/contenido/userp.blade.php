<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
</head>
<body>

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