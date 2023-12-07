<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foroadm.css') }}" />
    <title>Transport&Gps</title>
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
</head>

<body>

    <?php
    $comments = App\Models\Comment::all();
    ?>

    <nav class="ctboton">
        <h1 class="titulo">ADMINISTRACIÓN FORO</h1>
        <a class="boton3" href="{{ url('/admin') }}">Administracion General</a>
        <a href="{{ url('admin') }}" class="boton1">Volver</a>
    </nav>

    <div class="container">
        <table class="tablad">
            <thead>
                <tr class="til">
                    <th class="similar-til">ID</th>
                    <th class="similar-til">TITULO</th>
                    <th class="similar-til">COMENTARIO</th>
                    <th class="similar-til">IMAGEN</th>
                    <th class="similar-til">EDITAR</th>
                    <th class="similar-til">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->name }}</td>
                    <td class="copp">{{ $comment->comment }}</td>
                    <td>
                        @if($comment->image)
                        <img src="{{ asset('images/' . $comment->image) }}" alt="Imagen del comentario" style="max-width: 100px;">
                        @else
                        <p>No hay imagen</p>
                        @endif
                    </td>
                    <td class="editar">
                        <form action="{{ route('admin.updateComment', ['id' => $comment->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Campos para editar el comentario -->
                            <input class="camp" type="text" name="name" value="{{ $comment->name }}" required>
                            <input class="camp" type="text" name="comment" value="{{ $comment->comment }}" required>
                            <!-- Botón para guardar cambios -->
                            <input type="submit" class="btn btn-primary btac" value="Guardar">
                        </form>

                    </td>
                    <td>
                        <form action="{{ route('admin.deleteComment', ['id' => $comment->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <!-- Botón para eliminar el comentario -->
                        <button type="submit" class="btacDelete" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
                </tr>
                <tr>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
