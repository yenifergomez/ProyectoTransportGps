<?php

/////para no pasar de una pagina a otra por medio de el buscador
  session_start();

  if(isset($_SESSION['usuario'])){
    header("location: principal.php");
  }




?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSPORT&GPS</title>
    <link rel="shortcut icon" href="assets/images/logoac.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../') }}" />
    
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    
                    <form action="php/login_usuario_bd.php" method="POST" class="formulario__login">
               
                      <img class="proyecto" src="assets/images/logoac.png" alt="logo del proyecto">
                    
                     <h2>Iniciar Sesión</h2>
                        
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>iniciar</button>
                        <br>
                        <br>
                        <a href="contraseña.php">Olvidaste tu contraseña?</a>
                    </form>

                    <!--Registro-->
                    <form action="php/registro_usuario_bd.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>

                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                        
                    </form>
                </div>
            </div>

        </main>

        <script src="{{ asset('js/archivo.js') }}"></script>
</body>
</html>