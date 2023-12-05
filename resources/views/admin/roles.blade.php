<!DOCTYPE html>
<html>
<head>
    <!-- Metadatos, título, enlaces a estilos, etc. -->
</head>
<body>


@php
use App\Models\User;
    use App\Models\Role;

    $users = User::all();
    $roles = Role::all(); 
@endphp

<h1>Asignar Roles</h1>

<form action="{{ route('assign.roles') }}" method="POST">
    @csrf

    <label for="user">Selecciona un usuario:</label>
    <select name="user" id="user">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}</option>
        @endforeach
    </select>

    <label for="role">Selecciona un rol:</label>
    <select name="role" id="role">
        @foreach($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }} - {{ $role->description }}</option>
        @endforeach
    </select>

    <button type="submit">Asignar Rol</button>
</form>


</body>
</html>
