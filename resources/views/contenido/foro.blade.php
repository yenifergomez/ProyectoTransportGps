<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foro.css') }}" />

    <title>Foro</title>
</head>
<body>
    <h1>FORO TRANSPORT GPS</h1>
    <h3>Comparte que pasa en Popayan y sus Vias</h3>

    <h1>Crear Comentario</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="comment">Comentario:</label>
        <textarea id="comment" name="comment" required></textarea>
    </div>

    <div>
        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image">
    </div>

    <button type="submit">Enviar Comentario</button>







    <div>
    <h2>Comentarios:</h2>
    @foreach($comments as $comment)
        <div>
            <p><strong>{{ $comment->name }}</strong>: {{ $comment->comment }}</p>
            @if($comment->image)
                <img src="{{ asset('images/' . $comment->image) }}" alt="Imagen del comentario">
            @endif
        </div>
    @endforeach
</div>
</form>
</body>
</html>