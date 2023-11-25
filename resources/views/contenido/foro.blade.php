<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/foro.css') }}" />
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
    <title>Transport&Gps</title>
</head>
<body>

    <nav class="ctboton">
<h1 class="titulo">FORO DE NOVEDADES</h1> 
        <a href="{{ url('perfil') }}" class="boton3">Perfil</a>
     <button id="mostrarFormulario" class="ayudita">Ayuda</button>
        <a href="{{ url('contenido') }}" class="boton1">Volver</a>
    </nav>   

      <!-- Ventana ayuda-->
<div id="ventanaEmergente">
   <div id="formularioEmergente">

        <div class="ayuda-box">
            <h1 class="texto1">¿Comó podemos ayudarte?</h1>
             <h1 class="texto2">Comunicate con nosotros si tienes alguna dificultad con nuestro sitio web al correo transportgps@gmail.com.</h1>
            <h1 class="texto3">Seguridad</h1>
            <h1 class="texto4">Verifica que toda la información que ingreso sea valida en el momento de no utilizar más la aplicacion, asegurate de cerrar tu cuenta para que tus datos esten mas seguros.</h1>
            <h1 class="texto5">Guía de uso de Transportgps</h1>
            <h1 class="texto6">Crea una cuenta valida, que todos los datos sean correctos. a la hora de ingresar encontrara informacion sobre la pagina web y logos de la empresa donde al darle click en "ver mas" te mostrara los carteles donde estan los numeros de la rutas de los buses y lugares por los cuales pasan y si te diriges al boton de rutas te enseñara los mapas y sus rutas trazadas para que asi tenga una guia mas detallada. En perfil encontraras tus datos y si deseas lo puedes editar. </h1>
        </div>
       
   </div>
</div>
<!-- fin ayuda -->

<div class="edita">
    
        @if ($errors->any())
        <div class="card">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
                
            @csrf
                <h1 class="com">Crea tu Comentario</h1>

                <label class="tlu" for="name">Titulo</label>
                <input class="usu" type="text" id="name" name="name" required>
        
                <label class="tlc" for="comment">Comentario</label>
                <input class="cor" type="text" id="comment" name="comment" required>
        
            <a  class="boton5" >Elegir foto</a>
            <input class="ex" type="file" id="image" name="image">
        
            <button class="boton6" type="submit">Publicar</button>
        </form>
</div>




<!-- comentarios -->
<div class="coments">
    <h2 class="ctt">Comentarios</h2>

    @if(isset($comments) && count($comments) > 0)
        @foreach($comments as $comment)
        <div class="card">
                <p class="author"><strong>{{ $comment->name }}</strong>: {{ $comment->comment }}</p>
                @if($comment->image)
                    <img src="{{ asset('images/' . $comment->image) }}" alt="Imagen del comentario">
                @endif
            </div>
        @endforeach
    @else
        <p class="yuji">No hay comentarios aún.</p>
    @endif
</div>


</body>
<script src="{{ asset('js/home.js') }}"></script>
</html>