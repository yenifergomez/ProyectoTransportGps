<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transport&gps</title>
    <link rel="shortcut icon" href="/assets/images/logoac.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/contraseña.css">
</head>
<body>
    <div class="Restablecer-box">  
        <img class="avatar" src="img/restaurar.jpeg" alt="" width="300">
        <h1>Restablecer Contraseña</h1>
        <br>
        <!-- Formulario para solicitar restablecimiento de contraseña -->
        <form action="php/recuperar_contraseña.php" method="POST">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" placeholder="Ejemplo@gmail.com" required>
            <br>
            <label for="nueva_contraseña">Contraseña nueva</label>
            <input type="password" name="nueva_contraseña" placeholder="Ingresa tu nueva contraseña" required>
            <br><br>
            <button type="submit">Restablecer</button>
        </form>
    </div>
</body>
</html>
