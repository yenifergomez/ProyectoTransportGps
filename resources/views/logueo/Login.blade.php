<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}" />

    <title>Login</title>
</head>
<body>
<div class="contenedor__todo">
<div class="caja__trasera">


    <div class="contenedor__login-register">

</div>
<form class="formulario__login" action="/login" method="POST">

<img class="proyecto" src="img/logoac.png" alt="logo del proyecto">
    @csrf
    <h2>Iniciar Sesión</h2>


    <input type="text" placeholder="Ingresa Usuario" name="usuario" id="">
    <input type="password" placeholder="Ingrese Contraseña" name="password" id="">
    <input class="btnayu" type="submit" value="Login">

    <a  href="" class="olvido">Olvidaste tu contraseña?</a>


</form>
    </div>

</div>

</body>
</html>