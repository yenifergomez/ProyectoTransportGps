<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Mperfil.css') }}" />
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
    <title>Transport&Gps</title>
</head>
<body> 

<nav class="ctboton">
        <h1 class="titulo">PERFIL</h1>
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

      <!--menu-->
      <div class="caja__trasera">

<h2 class="ajus">Ajustes</h2>
     <a class="boton4">Version 3.0</a>
     <a  class="boton5" >Elegir foto</a>
     <!-- <a class="boton6">Eliminar cuenta</a> -->
     <a href="{{ route('logout.get') }}" class="boton7">Cerrar sesión</a>

</div>

<!--menu-->

<!-- FOTO DE PERFIL -->
<div class="edita"> 

<form method="POST" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
    @csrf

        <input class="ex" type="file" name="profile_image" id="profile_image">
   
        <button class="listo" type="submit">✓</button>
</form>
 

@if(Auth::user()->profile_image)
    <img class="proyecto" src="{{ asset(Auth::user()->profile_image) }}" alt="Perfil">
@else
    <p class="emer">Aun no subes una foto de perfil.</p>
@endif



<!-- EDITAR PERFIL -->
<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT') 

    <label class="tlu" for="usuario">Usuario</label>
    <input class="usu" type="text" id="usuario" name="usuario" value="{{Auth::user()->usuario }}">

    <label class="tlc" for="email">Correo</label>
    <input class="cor" type="email" id="email" name="email" value="{{ Auth::user()->email }}">

    <button class="btac" type="submit">Guardar</button>
</form>

</div>



<form id="form-eliminar-cuenta" method="POST" action="{{ route('delete.account') }}">
    @csrf
    @method('DELETE')

    
    <button class="boton6"  onclick="confirmarEliminarCuenta()" >Eliminar cuenta</button>
    
</form>

<script>
    function confirmarEliminarCuenta() {
        if (confirm('¿Estás seguro que deseas eliminar tu cuenta de Transport&Gps.')) {
            document.getElementById('form-eliminar-cuenta').submit();
        }
    }
</script>





</body>
<script src="{{ asset('js/home.js') }}"></script>
</html>