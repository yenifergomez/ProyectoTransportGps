 <!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/Principal.css') }}" />
   <link rel="shortcut icon" href="img/logoac.png" type="image/x-icon">


   <title>Transport&gps</title>
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
     <a href="{{ url('foro') }}" class="ayudita">Foro</a>
     <a class="barri" href="calificar.html">Calificar</a>
     <button id="mostrarFormulario" class="ayudita">Ayuda</button>
     <a href="{{ url('perfil') }}" class="ayudita">Administracion</a>


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
        
               <img class="proyecto" src="img/logoac.png" >
             
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
      <p class="txmisi2">Se busca orientar a las personas que usan el transporte público brindando información precisa y 
         actualizada sobre las rutas, de modo que se puedan guiar a través del sistema de información . </p>
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
     <p class="txvisi2">Se busca ofrecer un sistema de información confiable y
       conveniente para conectar de manera efectiva al usuario con su destino a través de la información de cada ruta.</p>
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
<div class="velu"><br><h1 class="buem">TRANSPUBENZA</h1><h1 class="disp">DISPONIBLE</h1><button class="btn" id="mostrarFormulario3">Ver mas</button></div>     
           <img src="img/tras pubenza.jpeg">
       </section>
       <section class="slider-section2">
         <div class="velu2"><br><h1 class="buem">TRANSLIBERTAD</h1><h1 class="disp">DISPONIBLE</h1><button class="btn" id="mostrarFormulario5">Ver mas</button></div>     
         <img src="img/tras libertad.jpeg">
       </section>
       <section class="slider-section2">
         <div class="velu3"><br><h1 class="buem">SOTRACAUCA</h1><h1 class="disp">DISPONIBLE</h1><button class="btn" id="mostrarFormulario7">Ver mas</button></div>     
         <img src="img/sotracauca metro.jpg">
       </section>
       <section class="slider-section2">
         <div class="velu4"><br><h1 class="buem">TRANSTAMBO</h1><h1 class="disp">DISPONIBLE</h1><button class="btn" id="mostrarFormulario9">Ver mas</button></div>     
           <img src="img/tras tambo.jpeg">
       </section>
       
   </div>
   <div class="btn-left2"><i class='bx bx-chevron-left'></i></div>
   <div class="btn-right2"><i class='bx bx-chevron-right'></i></div>

   
    
<!-- carteles rutas -->
      <div id="ventanaEmergente3" >
      <div id="formularioEmergente3">
         <div class="ruta-box">
            <button class="ruta" id="mostrarFormulario4">Rutas</button>
            <div class="r1">
               <h1 class="at">AUTOPISTA</h1>
               <h1 class="lp">LOMAS G.</h1>
               <ul class="cm"><li>CAMPANARIO</li>
                   <li>EXITO</li>
                   <li>TERMINAL</li>
                   <li>ESMERALDA</li>
                   <li>TOMAS C.</li>
                   <li>LAS PALMAS</li>
               </ul><button class="num">1</button></div>
           <div class="r2">
               <h1 class="cam">ASTURIAS</h1>
               <h1 class="lp">VARIANTE</h1>
               <ul class="cm"><li>CAMPANARIO</li>
                   <li>ESTADIO</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>PAJONAL</li>
                   <li>MIRADOR</li>
               </ul><button class="num">2</button></div>
           <div class="r3"> 
               <h1 class="at">LACTEOS</h1>
               <h1 class="lp">NARANJOS</h1>
               <ul class="cm"><li>ESTADIO</li>
                   <li>B. BOLIVAR</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>ESMERALDA</li>
                   <li>CHUNE</li>
               </ul><button class="num">4</button></div>
           <div class="r4"> 
               <h1 class="at">LACTEOS</h1>
               <h1 class="lp">SAUCES</h1>
               <ul class="cm"><li>ESTADIO</li>
                   <li>HOSPITAL</li>
                   <li>TELECOM</li>
                   <li>CENTRO</li>
                   <li>KELVIN</li>
               </ul><button class="num">5</button></div>
           <div class="r5"> 
               <h1 class="at">LACTEOS</h1>
               <h1 class="lp">NARANJOS</h1>
               <ul class="cm"><li>ESTADIO</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>ESMERALDA</li>
                   <li>CHUNE</li>
                   <li>LA MARIA</li>
               </ul><button class="num">6</button></div>
           <div class="r6">
                <h1 class="at">LACTEOS</h1>
               <h1 class="lp">CHUNE</h1>
               <ul class="cm"><li>ESTADIO</li>
                   <li>HOSPITAL</li>
                   <li>BOLIVAR</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>SAUCES</li>
               </ul><button class="num">8</button></div>
           <div class="r7">
            <h1 class="at">R. BLANCO</h1>
               <h1 class="lp">L. PALMAS</h1>
               <ul class="cm"><li>SENA</li>
                   <li>CAMPANARIO</li>
                   <li>HOSPITAL</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>CABUYERA</li>
               </ul><button class="num">9</button></div>

           <div class="r8">
                <h1 class="at">CAMPANARIO</h1>
               <h1 class="lp">LOMAS G.</h1>
               <ul class="ten"><li>EXITO</li>
                   <li>TERMINAL</li>
                   <li>CHUNE</li>
                   <li>LA MARIA</li>
                   <li>LAS GARZAS</li>
               </ul><button class="num">10</button></div>
           <div class="r9">
                <h1 class="at">R. BLANCO</h1>
               <h1 class="lp">CENTRO</h1>
               <ul class="elv"><li>SENA</li>
                   <li>CAMPANARIO</li>
                   <li>ESTADIO</li>
                   <li>B. BOLIVAR</li>
               </ul><button class="num">11</button></div>
         </div>
      </div>
      </div>

      <!--mapas pubenza -->
   <div id="ventanaEmergente4" >     
    <div id="formularioEmergente4">  
      <div class="mapa-box">
  <img class="mp" src="img/r1pub.png" >
  <img class="mp" src="img/r2pub.png" >
  <img class="mp" src="img/r4pub.png" >
  <img class="mp" src="img/r5pub.png" >
  <img class="mp" src="img/r6pub.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r10pub.png" >
  <img class="mp" src="img/r1.png" >
      </div>
    </div>
     </div>

</div>
<!-- translibertad -->
<div id="ventanaEmergente5" >
      <div id="formularioEmergente5">
         <div class="ruta-box">
            <button class="ruta2" id="mostrarFormulario6">Rutas</button>
            <div class="r1l">
               <h1 class="at">CAMPANARIO</h1>
               <h1 class="lp">ORTIGAL</h1>
               <ul class="cm"><li>B. BOLIVAR</li>
                   <li>TELECOM</li>
                   <li>FLORESTA</li>
                   <li>COMUNEROS</li>
                   <li>H. VIAS</li>
                   <li>LAS PALMAS</li>
               </ul><button class="num">1</button></div>
           <div class="r2l">
               <h1 class="cam">MICROBUS</h1>
               <h1 class="lp">CHUNE</h1>
               <ul class="cm"><li>ASTURIAS</li>
                   <li>CAMPANARIO</li>
                   <li>HOSPITAL</li>
                   <li>CRA 9</li>
                   <li>CALLE 4</li>
                   <li>ESMERALDA</li>
               </ul><button class="num">1</button></div>
           <div class="r3l"> 
               <h1 class="at">AUTOPISTA</h1>
               <h1 class="lp">L. PALMAS</h1>
               <ul class="cm"><li>CAMPANARIO</li>
                   <li>EXITO</li>
                   <li>TERMINAL</li>
                   <li>ESMERALDA</li>
                   <li>MIRADOR</li>
               </ul><button class="num">2</button></div>
           <div class="r4l"> 
               <h1 class="at">FALTA</h1>
               <h1 class="lp">L. PALMAS</h1>
               <ul class="cm"><li>CAMPANARIO</li>
                   <li>EXITO</li>
                   <li>TERMINAL</li>
                   <li>ESMERALDA</li>
                   <li>TOMAS C.</li>
                   <li>MIRADOR</li>
               </ul><button class="num">3</button></div>
           <div class="r5l"> 
           <h1 class="at">LA PAZ</h1>
               <h1 class="lp">LA MARIA</h1>
               <ul class="cm"><li>LACTEOS</li>
                   <li>B. BOLIVAR</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>JUZGADOS</li>
                   <li>ESMERALDA</li>
               </ul><button class="num">4</button></div>
           <div class="r6l">
                <h1 class="at">FALTA</h1>
               <h1 class="lp">CHUNE</h1>
               <ul class="cm"><li>ESTADIO</li>
                   <li>HOSPITAL</li>
                   <li>BOLIVAR</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>SAUCES</li>
               </ul><button class="num">5</button></div>
           <div class="r7l">
         <h1 class="at">FALTA</h1>
               <h1 class="lp">NARANJOS</h1>
               <ul class="cm"><li>ESTADIO</li>
                   <li>HOSPITAL</li>
                   <li>BOLIVAR</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>CHUNE</li>
               </ul><button class="num">7</button></div>
               <div class="r8l">
                <h1 class="at">FALTA</h1>
               <h1 class="lp">NARANJOS</h1>
               <ul class="cm"><li>ESTADIO</li>
                   <li>HOSPITAL</li>
                   <li>BOLIVAR</li>
                   <li>TELECOM</li>
                   <li>CALLE 13</li>
                   <li>CHUNE</li>
               </ul><button class="num">8</button></div>

         </div>
      </div>
      </div>

       <!--mapas libertad -->
   <div id="ventanaEmergente6" >     
    <div id="formularioEmergente6">  
      <div class="mapa-box">
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
      </div>
    </div>
     </div>

     <!-- metro -->
<div id="ventanaEmergente7" >
      <div id="formularioEmergente7">
         <div class="ruta-box">
            <button class="ruta3" id="mostrarFormulario8">Rutas</button>
            <div class="r1l">
               <h1 class="at">CAMPANARIO</h1>
               <h1 class="lp">ORTIGAL</h1>
               <ul class="cm"><li>TRANSITO</li>
                   <li>TELECOM</li>
                   <li>FLORESTA</li>
                   <li>COMUNEROS</li>
                   <li>H. VIAS</li>
                   <li>LAS PALMAS</li>
               </ul><button class="num">1</button></div>
           <div class="r2l">
               <h1 class="cam">CAMPANARIO</h1>
               <h1 class="lp">JULUMITO</h1>
               <ul class="cm"><li>EXITO</li>
                   <li>TERMINAL</li>
                   <li>CRA 9</li>
                   <li>CALLE 4</li>
                   <li>ESMERALDA</li>
                   <li>LOMAS G.</li>
               </ul><button class="num">2</button></div>
           <div class="r3l"> 
               <h1 class="at">AUTOPISTA</h1>
               <h1 class="lp">JULUMITO</h1>
               <ul class="cm"><li>CAMPANARIO</li>
                   <li>HOSPITAL</li>
                   <li>CALLE 13</li>
                   <li>ESMERALDA</li>
                   <li>CHUNE</li>
                   <li>LOMAS G.</li>
               </ul><button class="num">7</button></div>
           <div class="r4l"> 
               <h1 class="at">FALTA</h1>
               <h1 class="lp">L. PALMAS</h1>
               <ul class="cm"><li>CAMPANARIO</li>
                   <li>EXITO</li>
                   <li>TERMINAL</li>
                   <li>ESMERALDA</li>
                   <li>TOMAS C.</li>
                   <li>MIRADOR</li>
               </ul><button class="num">8</button></div>
           <div class="r5l"> 
           <h1 class="at">R. BLANCO</h1>
               <h1 class="lp">JULUMITO</h1>
               <ul class="cm"><li>TERRAPLAZA</li>
                   <li>LACTEOS</li>
                   <li>ESTADIO</li>
                   <li>TELECOM</li>
               </ul><button class="num">9</button></div>
         </div>
      </div>
      </div>

       <!--mapas metro -->
   <div id="ventanaEmergente8" >     
    <div id="formularioEmergente8">  
      <div class="mapa-box">
  <img class="mp" src="img/r1m.png" >
  <img class="mp" src="img/r2m.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r1.png" >
  <img class="mp" src="img/r9m.png" >

      </div>
    </div>
     </div>

          <!-- tambo -->
<div id="ventanaEmergente9" >
      <div id="formularioEmergente9">
         <div class="ruta-box">
            <button class="ruta4" id="mostrarFormulario10">Rutas</button>
            <div class="r1l">
               <h1 class="at">PISOJE</h1>
               <h1 class="lp">CAJETE</h1>
               <ul class="cm"><li>LACTEOS</li>
                   <li>ESTADIO</li>
                   <li>LOTERIA</li>
                   <li>CENTRO</li>
                   <li>CHUNE</li>
                   <li>LAS PALMAS</li>
               </ul><button class="num">1</button></div>
           <div class="r2l">
               <h1 class="cam">SENA</h1>
               <h1 class="lp">ORTIGAL</h1>
               <ul class="cm"><li>CAMPANARIO</li>
                   <li>TERMINAL</li>
                   <li>ESMERALDA</li>
                   <li>CHUNE</li>
                   <li>LA MARIA</li>
                   <li>NARANJOS</li>
               </ul><button class="num">2</button></div>
           <div class="r3l"> 
               <h1 class="at">PENAL</h1>
               <h1 class="lp">L. PALMAS</h1>
               <ul class="cm"><li>LA PAZ</li>
                   <li>LACTEOS</li>
                   <li>LOTERIA</li>
                   <li>CENTRO</li>
                   <li>CHUNE</li>
                   <li>TOMAS C.</li>
               </ul><button class="num">4</button></div>
           <div class="r4l"> 
           <h1 class="at">PENAL</h1>
               <h1 class="lp">CAJETE</h1>
               <ul class="cm"><li>LA PAZ</li>
                   <li>CAMPANARIO</li>
                   <li>EXITO</li>
                   <li>TERMINAL</li>
                   <li>ESMERALDA</li>
                   <li>LA MARIA</li>
               </ul><button class="num">6</button></div>
           
         </div>
      </div>
      </div>

       <!--mapas tambo -->
   <div id="ventanaEmergente10" >     
    <div id="formularioEmergente10">  
      <div class="mapa-box">
  <img class="mp" src="img/r1t.png" >
  <img class="mp" src="img/r2t.png" >
  <img class="mp" src="img/r4t.png" >
  <img class="mp" src="img/r6t.png" >
      </div>
    </div>
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
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/home2.js') }}"></script>

</html>