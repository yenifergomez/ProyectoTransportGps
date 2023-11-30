<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport&Gps</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
</head> 
<body> 

    <nav class="ctboton">
        <h1 class="titulo">ADMINISTRACIÓN</h1>
        <a class="boton3" href="{{ url('/Foro-Administracion') }}">Administrar Foro</a>

    <a href="{{ url('reportes-admin') }}"class="ayudita">Ayuda</a>

        <a href="{{ url('contenido') }}" class="boton1">Volver</a>
    </nav>

    
@if(isset($users) && count($users) > 0)
<div class="tablad">
    <table>
        <thead>
        <tr>
        <th class="til">USUARIO</th>
        <th class="til">CORREO</th>
        <th class="til">EDITAR</th>
        <th class="til">ROLES</th>
        <th class="til"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
    <td class="usuario"><h1 class="user">{{$user->usuario}}</h1></td>
    <td class="correo"><h1 class="user">{{$user->email}}</h1></td>
    <td class="editar">
        <form action="{{ route('admin.perfil.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="usuario" value="{{ $user->usuario }}">
            <input type="email" name="email" value="{{ $user->email }}">
            <button class="btac" type="submit">Actualizar</button>
        </form>
    </td>
    <td> 




    
        <p>{{ $user->name }}</p>
        <form method="POST" action="{{ route('assign.role', $user) }}">
            @csrf
            <select name="role">
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
            </select>
            <button class="btac" type="submit">Asignar Rol</button>
        </form>
        
        </td>
        <td>
            <form action="{{ route('admin.perfil.delete', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btacDelete" type="submit">Eliminar Usuario</button>
            </form>
        </td>
        </tr>
        @endforeach
       </tbody>
        </table>
    </div>
    @else
        <p>Lista de Usuarios TransportGPS vacía!!</p>
    @endif


</body>
<script src="{{ asset('js/home.js') }}"></script>
</html>
