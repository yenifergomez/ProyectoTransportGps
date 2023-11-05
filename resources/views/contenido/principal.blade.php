 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transport&gps</title>
    <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/Principal.css') }}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
 <header class="cabeza" id="inicio">

   <div class="velo"></div>
 

<nav class="barra">

   <nav class="vlogo">
      <img src="img/logoac.png" class="logo">
   </nav>
     
   <a class="tex" >AAAA</a>
     <a class="barri" href="#inicio" >Inicio</a>
     <a class="barri" href="#info">Informacion </a>
     <a class="barri" href="#empresas">Empresas de transporte</a>
     <a class="barri" href="#comentarios">Expectativas</a>
     <a class="barri" href="#desarrolladores">Creadores</a>
     <a class="barri" href="mapa.html"> Mapa </a>
     <a class="barri" href="calificar.html">Calificar</a>
     <button id="mostrarFormulario" class="ayudita">Ayuda</button>
     <button id="mostrarFormulario2" class="ayudita">Otros..</button>

</nav>

<h1 class="bienv">TRANSPORT&GPS <br> EXPLORA TU CIUDAD</h1>

<div class="caja-video">
   <video autoplay loop>
     <source src="img/vprin.mp4" type="video/mp4">
   </video>
 </div> 

   <!-- Ventana ayuda-->
<div id="ventanaEmergente">
   <div id="formularioEmergente">
       
           <form class="formulario__aid">
               <div class="ayuda-box">
                   <h1 class="textoo1">¿En qué podemos ayudarte?</h1>
                   <br>
                   <input type="text" class="cajita" placeholder="¿Cuál es tu dificultad?">
                   <input type="text" class="cajita" placeholder="Correo">
                   <br><br>
                   
                       <button type="submit" class="btnayu">Enviar</button>
                   
                   <h1 class="textoo2">“Tu búsqueda te ayuda, coopera y prospera”</h1>
               </div>
           </form>
       
   </div>
</div>
<!-- fin ayuda -->

<!-- ventana menu -->
 <div id="ventanaEmergente2">
   <div id="formularioEmergente2">
       
      <!--menu-->
         <div class="caja__trasera">

            <h2 class="ajus">Ajustes</h2>

              <div class="bots">
                 <button id="" class="vers">Version 3.0</button>
                 <button id="" class="vers">Eliminar cuenta</button>
                 <button id="" class="vers">Cerrar sesion</button>
               </div>

         </div>
 
         <!--Formulario de Login y registro-->
         <div class="contenedor__login-register">
             <!--Login-->


             <form action="php/login_usuario_bd.php" method="POST" class="formulario__login">
        
               <img class="proyecto" src="img/agregar-usuario.png" >
             
              <input type="text" placeholder="Usuario" name="">
              <input type="text" placeholder="Correo" name="">
              <input type="password" placeholder="Contraseña" name="">
              <button type="submit" class="btnregi">Guardar</button>
                 
             </form>
 
         </div>
     <!--menu-->
       
   </div>
</div>
<!-- fin menu -->

</header>
    <main>

      <div class="container-carousel" id="info">
         <div class="carruseles" id="slider">
               <section class="slider-section">
                 
                 <h1 class="tlmisi">MISIÓN</h1>
     
     <div class="txmisi">
      <p class="txmisi2">Buscamos orientar a las personas nuevas en la ciudad, que no tienen conocimiento
     sobre las rutas en la localidad y así conseguir el máximo aprovechamiento al
     transporte público.</p>
     </div>  
     
     <div class="caja-video2">
        <video autoplay loop>
          <source src="img/vprin.mp4" type="video/mp4">
        </video>
      </div> 
     
     
               </section>
             
               <section class="slider-section">
     
                 <h1 class="tlvisi">VISIÓN</h1> 
     <div class="txvisi">
     <p class="txvisi2">Se plantea que en el transcurso del año 2022 al 2023, se busca crear un software
        innovador que sea accesible al público en general, el cual pueda brindarle
        información sobre las rutas al usuario en la ciudad.</p>
     </div>
     
     <div class="caja-video3">
        <video autoplay loop>
          <source src="img/vprin.mp4" type="video/mp4">
        </video>
      </div> 
     
               </section>
             
         </div>
         <div class="btn-left"><i class='bx bx-chevron-left'></i></div>
         <div class="btn-right"><i class='bx bx-chevron-right'></i></div>
     </div>
 
<!--empresas -->

<div class="container-carousel2" id="empresas">
   <div class="carruseles2" id="slider2">
       <section class="slider-section2">
<div class="velu"><br><h1 class="buem">TRANSPUBENZA</h1><h1 class="disp">DISPONIBLE</h1></div>     
           <img src="img/tras pubenza.jpeg">
       </section>
       <section class="slider-section2">
         <div class="velu2"><br><h1 class="buem">TRANSLIBERTAD</h1><h1 class="disp">DISPONIBLE</h1></div>     
         <img src="img/tras libertad.jpeg">
       </section>
       <section class="slider-section2">
         <div class="velu3"><br><h1 class="buem">SOTRACAUCA METRO</h1><h1 class="disp">DISPONIBLE</h1></div>     
         <img src="img/sotracauca metro.jpg">
       </section>
       <section class="slider-section2">
         <div class="velu4"><br><h1 class="buem">TRANSTAMBO</h1><h1 class="disp">DISPONIBLE</h1></div>     
           <img src="img/tras tambo.jpeg">
       </section>
       
   </div>
   <div class="btn-left2"><i class='bx bx-chevron-left'></i></div>
   <div class="btn-right2"><i class='bx bx-chevron-right'></i></div>


</div>

<!-- comentarios -->
      <section class="coment" id="comentarios">

        <h2 class="cmt"> COMENTARIOS Y EXPECTATIVAS DE LOS USUARIOS </h2>

     <div class="cards">
        <div class="card">
           <img src="img/thania.jpeg" alt="">
          <div class="contenido-texto-card">
             <h4>Thania</h4>
             <p>Ps mi experiencia con el transporte público ha sido muy regular después de la pandemia se redujo mucho y  toca esperar mucho por una ruta  y ps me parece interesante una app ojalá y sea para el bien de todos y mejore tantas fallas que hay estos tiempos.</p>
         
            </div>
         </div>
         <div class="card">
            <img src="img/ALEXA.jpeg" alt="">
           <div class="contenido-texto-card">
              <h4>Alexa</h4>
               <p>Mi experiencia con en el transporte público de la ciudad es mala, el servicio que prestan es deficiente no tienen la cantidad de buses para la población que requiere el servicio, los buses se encuentran en pésimas condiciones Una aplicación que me permita localizar busetas sería buena, de esa manera las personas podrían saber el tiempo de espera.</p>
          
            </div>
          </div>
          <div class="card">
            <img src="img/DAYLIN.jpeg" alt="">
           <div class="contenido-texto-card">
              <h4>Dailyn</h4>
               <p>A sido regular, el transporte público suele ser bastante masivo en algunas ocasiones lo que dificultad una estadía amena dentro de este tipo de transporte.

                Una aplicación de este tipo permitiria saber con mayor exactitud a qué distancia se encontraría la ruta que se necesita, esperaría ahorrar tiempo al saber exactamente dónde y cuando vendrá mi ruta.</p>
             </div>
          </div>
       </div>

      </section>
      <section class="programadores" id="desarrolladores">
         <h2 class="titulo">CREADORES</h2>
         <div class="servicio-cont">     <!--efecto-->
             <div class="servicio-ind">
               <img src="img/yeniferr.jpg" alt="">
                    <h3>Yenifer Gomez Papamija</h3>
               <p> Actualmente tengo 18 años
                   soy de el municipio de Balboa Cauca,
                    me desempeño como la diseñadora del grupo.</p>
               <br>
             </div>
             <div class="servicio-ind">
               <img src="img/vanec.jpg" alt="">
                    <h3>Vanessa Chanchi de la Cruz  </h3>
               <p> Actualmente tengo 20 años soy
                     del municipio de Almaguer Cauca,
                    me desempeño como la analista y tester del grupo.</p>
               <br>
             </div>
             <div class="servicio-ind">
               <img src="img/daniell.jpg" alt="">
                    <h3>Daniel Alejandro Acosta</h3>
               <p> Actualmente tengo 18 años
                   soy de la ciudad de Popayan Cauca,
                   me desempeño como el identificador del grupo.</p>
               <br>
             </div>
               <div class="servicio-ind">
               <img src="img/sebas.jpg" alt="">
               <h3>Sebastian Alvarado Angulo</h3>
               <p> Actualmente tengo 18 años 
                  soy de la de ciudad santiago de cali,
                  me desempeño como el programador del grupo.</p>
                   <br>
               </div>
             </div>
          </div>
      </section>
    </main>
    <footer>
      <div class="contenedor-footer">
         <div class="content-foo">
            <h4>Contacto</h4>
            <p>3205220128</p>

         </div>
         <div class="content-foo">
            <h4>Correo</h4>
            <p>transport&gps@gmail.com</p>

         </div>
         <div class="content-foo">
            <h4>Localidad</h4>
            <p>cr 15 69n 45</p>

         </div>
      </div>
      <h2 class="titulo-final">&copy;  Transport&gps “Tu búsqueda te ayuda, coopera y prospera” <br>Copyright 2023 - All rights reserved</h2>
    </footer>
    
</body>
<link rel="stylesheet" href="assets/js/home2.js">
<link rel="stylesheet" href="assets/js/home.js">
</html>