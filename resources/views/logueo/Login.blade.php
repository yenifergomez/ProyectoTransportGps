<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    

<form action="/login" method="POST">
    @csrf
    usuario/email
    <input type="text" name="usuario" id="">
    

    password  
    <input type="password" name="password" id="">

    <input type="submit" value="Login">

</form>



</body>
</html>