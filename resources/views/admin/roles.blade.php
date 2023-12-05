<!DOCTYPE html>
<html>
<head>
    <title>Asignar Rol a Usuario</title>
</head>
<body>


<!-- admin.roles.blade.php -->

<!-- Mostrar información de usuarios -->
<h1>Lista de Usuarios</h1>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>
    @endforeach
</ul>

<!-- Mostrar información de roles -->
<h1>Lista de Roles</h1>
<ul>
    @foreach($roles as $role)
        <li>{{ $role->name }} - {{ $role->description }}</li>
    @endforeach
</ul>

<!-- Mostrar información de usuarios para asignar roles -->
<h1>Lista de Usuarios para Asignar Roles</h1>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>
    @endforeach
</ul>

<!-- Mostrar información de roles disponibles para asignar -->
<h1>Lista de Roles Disponibles para Asignar</h1>
<ul>
    @foreach($roles as $role)
        <li>{{ $role->name }} - {{ $role->description }}</li>
    @endforeach
</ul>


</body>
</html>
