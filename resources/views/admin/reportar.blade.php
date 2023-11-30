<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Reportar un problema</h1>
    @if(session('success'))
    <div>{{ session('success') }}</div>
@endif

@if($errors->has('error'))
    <div>{{ $errors->first('error') }}</div>
@endif

<form action="{{ route('reportar') }}" method="post">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre">
    <textarea name="reporte" placeholder="Reporte"></textarea>
    <button type="submit">Enviar Reporte</button>
</form>
    
</body>
</html>