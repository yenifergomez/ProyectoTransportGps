<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foroadm.css') }}" />
    <title>Foro-Admin</title>
</head>


<?php
$comments = App\Models\Comment::all(); 
?>


<nav class="ctboton">
    <h1 class="titulo">ADMINISTRACIÓN</h1>
    <a class="boton3" href="{{ url('/admin') }}">Administracion General</a>
    <button id="mostrarFormulario" class="ayudita">Reportes</button>
    <a href="{{ url('admin') }}" class="boton1">Volver</a>


</nav>
<div class="tablad">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>COMENTARIO</th>
                <th>IMAGEN</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @if($comments->isEmpty())
                <tr>
                    <td colspan="5">No hay comentarios disponibles</td>
                </tr>
            @else
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td><input type="text" value="{{ $comment->name }}" ></td>
                        <td><textarea >{{ $comment->comment }}</textarea></td>
                        <td>
                            @if($comment->image)
                                <img src="{{ asset('images/' . $comment->image) }}" alt="Imagen del comentario" style="max-width: 100px;">
                            @else
                                No imagen
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('admin.actualizar_comentario', ['id' => $comment->id]) }}" method="POST">
                                <!-- Formulario para actualizar -->
                                @csrf
                                @method('PUT') 
                                <button class="btac" type="submit">Guardar cambios</button>
                            </form>
                            <form action="{{ route('admin.eliminar_comentario', ['id' => $comment->id]) }}" method="POST">
                                <!-- Formulario para eliminar -->
                                @csrf
                                @method('DELETE') 
                                <button class="btacDelete"  type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>


</body>
</html>







