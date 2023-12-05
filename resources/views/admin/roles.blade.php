<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport&Gps</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}" /> -->
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
</head> 
<body>

<!-- admin.roles.blade.php -->

@php
use App\Models\User;
    use App\Models\Role;

    $users = User::all();
    $roles = Role::all(); 
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
