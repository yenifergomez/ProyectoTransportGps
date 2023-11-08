<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport&gps</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}" />
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head> 
<body> 
  <main>
 
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
            </div>
            <div class="caja__trasera-register">
<br><br><br><br><br><br><br><br><br><br>
<h1 class="textoo">Inicia sesión para entrar en la página</h1>

            </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            
            <form class="formulario__login" action="/login" method="POST">
       
              <img class="proyecto" src="img/logoac.png" alt="logo del proyecto">
              @csrf
             <h2>Iniciar Sesión</h2>
                
             <input type="text" placeholder="Usuario" name="usuario" id="usuario">
             <input type="password" placeholder="Contraseña" name="password" id="password">
             <input class="btnayu" type="submit" value="Inicio">


                
                <a  href="" class="olvido">Olvidaste tu contraseña?</a>
               
            </form> 


        </div>
    </div>

</main>
  

</body>
</html>