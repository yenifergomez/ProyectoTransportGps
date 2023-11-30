<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REPORTES</h1>

    @foreach($reportes as $reporte)
    <div>
        <p>{{ $reporte->nombre }}</p>
        <p>{{ $reporte->reporte }}</p>
        <form action="{{ route('ruta_para_eliminar_reporte', $reporte->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
@endforeach


</body>
</html>