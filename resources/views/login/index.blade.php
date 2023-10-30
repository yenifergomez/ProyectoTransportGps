<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSPORT&GPS</title>
    <link rel="shortcut icon" href="assets/images/logoac.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    
</head>
<body>
<div class="contenedor__login-register">
    
    <form action="/register" method="POST">
        @csrf
        <h2>Registrarse</h2> 
              
        <input type="text" placeholder="Ingrese Usuario" name="usuario">
        <input type="email" placeholder="usuario@example.com" name="email" >
        <input type="password" placeholder="Ingrese Contraseña"     name="password">
        <input class="btnayu" type="submit" value="Registrar">
       </form>
       <img class="logo"   src="img/logoac.png" alt="">

    </div>
 </div>
      



</body>
</html>