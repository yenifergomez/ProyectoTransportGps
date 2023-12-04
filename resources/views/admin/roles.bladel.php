<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="{{ route('assign.role', $user) }}">
    @csrf
    <select name="role"> <!-- Cambiado a name="role" -->
        <option value="Administrador">Administrador</option>
        <option value="Usuario">Usuario</option>
    </select>
    <button class="btac" type="submit">Asignar Rol</button>
</form>




</body>
</html>