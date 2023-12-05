<!DOCTYPE html>
<html>
<head>
    <title>Asignar Rol a Usuario</title>
</head>
<body>

<!-- admin.roles.blade.php -->

@php
use App\Models\User;
    use App\Models\Role;

    $users = User::all();
    $roles = Role::all(); // Assuming you have a Role model
@endphp

<!-- Mostrar información de usuarios -->
<h1>Lista de Usuarios</h1>
<ul>
    <li>{{ $users->first()->name }} - {{ $users->first()->email }}</li>
</ul>

<!-- Mostrar información de roles -->
<h1>Lista de Roles</h1>
<ul>
    <li>{{ $roles->first()->name }} - {{ $roles->first()->description }}</li>
</ul>

<!-- Mostrar información de usuarios para asignar roles -->
<h1>Lista de Usuarios para Asignar Roles</h1>
<ul>
    <li>{{ $users->first()->name }} - {{ $users->first()->email }}</li>
</ul>

<!-- Mostrar información de roles disponibles para asignar -->
<h1>Lista de Roles Disponibles para Asignar</h1>
<ul>
    <li>{{ $roles->first()->name }} - {{ $roles->first()->description }}</li>
</ul>

</body>
</html>
