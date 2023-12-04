<!DOCTYPE html>
<html>
<head>
    <title>Asignar Rol a Usuario</title>
</head>
<body>
    <h1>Asignar Rol a Usuario</h1>

    <form method="POST" action="{{ route('assignar_rol') }}">
        @csrf
        <label for="user_id">Selecciona un usuario:</label>
        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="role">Selecciona un rol:</label>
        <select name="role" id="role">
            @foreach($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>

        <button type="submit">Asignar Rol</button>
    </form>
</body>
</html>
