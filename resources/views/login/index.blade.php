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

       <form action="/register" method="POST">
        @csrf
        <input type="text" name="usuario">
        <input type="email" name="email" >
        <input type="password" name="password">
        <input type="submit" value="Registrar">
       </form>



</body>
</html>