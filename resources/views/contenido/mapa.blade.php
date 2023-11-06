<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="barr">

<nav class="vlogo">
    <img src="img/logoac.png" class="logo">
</nav>

<a class="tex" >AAAA</a>
<a class="barri" href="home.html" >Inicio</a>
<a class="barri" href="calificar.html"> Calificar</a>
<button id="mostrarFormulario" class="ayudita">Ayuda</button>
<button id="mostrarFormulario2" class="ayudita">Otros..</button>
</nav>

<!-- Ventana ayuda-->
<div id="ventanaEmergente">
<div id="formularioEmergente">

    <form class="formulario__aid">
        <div class="ayuda-box">
            <h1 class="textoo1">¿En qué podemos ayudarte?</h1>
            <br>
            <input type="text" class="cajita" placeholder="¿Cuál es tu dificultad?">
            <input type="text" class="cajita" placeholder="Correo">
            <br><br>
            
                <button type="submit" class="btnayu">Enviar</button>
            
            <h1 class="textoo2">“Tu búsqueda te ayuda, coopera y prospera”</h1>
        </div>
    </form>

</div>
</div>
<!-- fin ayuda -->

<!-- ventana menu -->
<div id="ventanaEmergente2">
<div id="formularioEmergente2">

<!--menu-->
  <div class="caja__trasera">

     <h2 class="ajus">Ajustes</h2>

       <div class="bots">
          <button id="" class="vers">Version 3.0</button>
          <button id="" class="vers">Eliminar cuenta</button>
          <button id="" class="vers">Cerrar sesion</button>
        </div>

  </div>

  <!--Formulario de Login y registro-->
  <div class="contenedor__login-register">
      <!--Login-->


      <form action="php/login_usuario_bd.php" method="POST" class="formulario__login">
 
        <img class="proyecto" src="img/agregar-usuario.png" >
      
       <input type="text" placeholder="Usuario" name="">
       <input type="text" placeholder="Correo" name="">
       <input type="password" placeholder="Contraseña" name="">
       <button class="btnregi">Guardar</button>
          
      </form>

  </div>
</div>
</div>
<!-- fin menu -->

<div class="mapa">


   <input type="text" placeholder="Ubicación actual">

   
   
  
   <input type="text" placeholder="Destino">
   
   
  
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15944.32812751008!2d-76.5603715!3d2.4797914999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1668174229072!5m2!1ses!2sco" width="95%" height="65%" style="border:0; margin-top:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>

<script src="js/home.js"></script>
    
</body>
</html>