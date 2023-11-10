<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foro.css') }}" />
    <title>Foro</title>
</head>
<body>
    <header>
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
    </footer>
</body>
</html>

