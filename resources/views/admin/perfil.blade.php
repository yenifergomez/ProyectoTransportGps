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
        <a href="{{ url('foro') }}" class="boton3">Foro</a>
     <button id="mostrarFormulario" class="ayudita">Ayuda</button>
        <a href="{{ url('contenido') }}" class="boton1">Volver</a>
    </nav>

  <!-- Ventana ayuda-->
<div id="ventanaEmergente">
   <div id="formularioEmergente">

        <div class="ayuda-box">
            <h1 class="texto1">¿Comó podemos ayudarte?</h1>
             <h1 class="texto2">Comunicate con nosotros si tienes alguna dificultad con nuestro sitio web al correo transportgps@gmail.com.</h1>
            <h1 class="texto3">Seguridad</h1>
            <h1 class="texto4">Verifica que toda la información que ingreso sea valida en el momento de no utilizar más la aplicacion, asegurate de cerrar tu cuenta para que tus datos esten mas seguros.</h1>
            <h1 class="texto5">Guía de uso de Transportgps</h1>
            <h1 class="texto6">Crea una cuenta valida, que todos los datos sean correctos. a la hora de ingresar encontrara informacion sobre la pagina web y logos de la empresa donde al darle click en "ver mas" te mostrara los carteles donde estan los numeros de la rutas de los buses y lugares por los cuales pasan y si te diriges al boton de rutas te enseñara los mapas y sus rutas trazadas para que asi tenga una guia mas detallada. En perfil encontraras tus datos y si deseas lo puedes editar. </h1>
        </div>
       
   </div>
</div>
<!-- fin ayuda -->
    
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
                <button class="btac" type="submit">Eliminar</button>
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
