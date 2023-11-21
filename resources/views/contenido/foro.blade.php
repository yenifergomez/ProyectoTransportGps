<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foro.css') }}" />
    <title>Foro</title>
</head>
<body>
    <!-- <header>
        <h1>Foro de últimas novedades</h1>
    </header>

    <section class="card-container">
        <div class="card">
            <h2>Accidente</h2>
            <p>Hoy viernes 10 de noviembre, desde las 12 de la tarde hubo un accidente y acausa de eso hay un trancon.</p>
            <p class="author">Usuario: Erika Gomez</p>
        </div>

        <div class="card">
            <h2>Trancon</h2>
            <p>Desde las 6 de la mañana en la terminal hubo trancon y aun no solucionan.</p>
            <p class="author">Usuario: Liset Perafan</p>
        </div>

        <div class="card">
            <h2>Accidente</h2>
            <p>Hoy viernes 10 de noviembre, desde las 12 de la tarde hubo un accidente y acausa de eso hay un trancon.</p>
            <p class="author">Usuario: Erika Gomez</p>
        </div>

        <div class="card">
            <h2>Trancon</h2>
            <p>Desde las 6 de la mañana en la terminal hubo trancon y aun no solucionan.</p>
            <p class="author">Usuario: Liset Perafan</p>
        </div>

        <div class="card">
            <h2>Accidente</h2>
            <p>Hoy viernes 10 de noviembre, desde las 12 de la tarde hubo un accidente y acausa de eso hay un trancon.</p>
            <p class="author">Usuario: Erika Gomez</p>
        </div>

        <div class="card">
            <h2>Trancon</h2>
            <p>Desde las 6 de la mañana en la terminal hubo trancon y aun no solucionan.</p>
            <p class="author">Usuario: Liset Perafan</p>
        </div>


        
    </section>

   
    <footer>
        <form action="#" method="post">
            <label for="post-title">Título:</label>
            <input type="text" id="post-title" name="post-title" required>

            <label for="post-content">Contenido:</label>
            <textarea id="post-content" name="post-content" required></textarea>


            <button type="submit">Publicar</button>
        </form>
    </footer> -->





<h1>FORO</h1>


<!-- Formulario para agregar un nuevo comentario -->
@if(Auth::check())
    @if(isset($post))
        <form method="POST" action="{{ route('comments.store', $post->id) }}">
            @csrf
            <textarea name="body" rows="3" cols="50" placeholder="Agregar un comentario"></textarea><br>
            <button type="submit">Publicar comentario</button>
        </form>
    @else
        <p>No se ha encontrado la publicación.</p>
    @endif
@else
    <p>Por favor <a href="{{ route('login') }}">inicie sesión</a> para agregar comentarios.</p>
@endif




<!-- Mostrar los comentarios existentes -->
@if(isset($post) && $post->comments->count() > 0)
    <h3>Comments:</h3>
    <ul>
        @foreach($post->comments as $comment)
            <li>
                {{ $comment->body }}
                @if(Auth::check() && Auth::id() === $comment->user_id)
                    <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
    @endif









</body>
</html>

