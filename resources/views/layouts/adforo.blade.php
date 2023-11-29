<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORO_ADMINISTRADOR</title>
</head>
<body>


@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Comentario</h1>
        <form method="POST" action="{{ route('layouts.adforo.update', ['id' => $comment->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $comment->name }}">
            </div>
            <div class="form-group">
                <label for="comment">Comentario:</label>
                <textarea class="form-control" id="comment" name="comment">{{ $comment->comment }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($comment->image)
                    <img src="{{ asset('storage/' . $comment->image) }}" alt="Comment Image" style="max-width: 200px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Comentario</button>
        </form>

        <form method="POST" action="{{ route('comment.destroy', ['id' => $comment->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('¿Estás seguro que deseas eliminar este comentario?')">Eliminar Comentario</button>
        </form>
    </div>
@endsection



    
</body>
</html>
