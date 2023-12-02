<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foroadm.css') }}" />
    <title>Foro_Administracion</title>
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






<div class="similar-table"> 
        <div class="container">
            <table>
            <tr>
                <th class="similar-til">ID</th>
                <th class="similar-til">TITULO</th>
                <th class="similar-til">COMENTARIO</th>
                <th class="similar-til">IMAGEN</th>
                <th class="similar-til">ACCIONES</th>
            </tr>
        </thead>
            <div class="row justify-content-center">
                    @if(session('success'))
                        <!-- ... -->
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger">                    
                        @endif
                    <div class="card">
                        <div class="card-body">
                            @foreach($comments as $comment)
                            <div class="mb-3 comentario">
                                    <form action="{{ route('admin.updateComment', ['id' => $comment->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <!-- Campos para editar el comentario -->
                                        <input type="text" name="name" value="{{ $comment->name }}" required>
                                        <textarea name="comment" required>{{ $comment->comment }}</textarea>
                                        <!-- Botón para guardar cambios -->
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </form>
                                    <form action="{{ route('admin.deleteComment', ['id' => $comment->id]) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Botón para eliminar el comentario -->
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                    <!-- Mostrar detalles del comentario -->
                                    <p>{{ $comment->id }}</p>
                                    <p>{{ $comment->title }}
                                    @if($comment->image)
                                        <img src="{{ asset('images/' . $comment->image) }}" alt="Imagen del comentario" style="max-width: 100px;">
                                    @else
                                        <p>No hay imagen</p>
                                    @endif
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </table>
    </div>



</body>
</html>
