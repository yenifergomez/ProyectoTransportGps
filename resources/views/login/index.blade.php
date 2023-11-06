<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport&gps</title>
    <link rel="shortcut icon" href="assets/images/logoac.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    
</head> 
<body>
  <main>
 
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <img class="logo"   src="img/logoac.png" alt="">

            <div class="caja__trasera-login">
            </div>
            <div class="caja__trasera-register">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            </div>
        </div>
 
        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            
            <form action="/register" method="POST">
                @csrf
             <h2>Registro</h2>
                
             <input type="text" placeholder="Usuario" name="usuario">
             <input type="email" placeholder="Correo" name="email" >
             <input type="password" placeholder="Contraseña" name="password">
             <input class="btnayu" type="submit" value="Registrar">



                
               
            </form> 


        </div>
    </div>

</main>
  

</body>
</html>

