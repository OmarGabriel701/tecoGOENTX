<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>BICI UV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  
   body {
      font: 400 15px/1.8 Lato, sans-serif;
      background-image: url(fondo-azul.jpg)
  }
  h1 {
    margin: 10px 0 30px 0;
      letter-spacing: 2px;      
      font-size: 20px;
      color: #273746;
  }

  p {
    color:#fff;
  }
  
  h1{
      color: #E8F2FF;
  }

  h2 {
    color:#D6D6D6;
  }

  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 2px;      
      font-size: 20px;
      color: #fff;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
     /* -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  /*Contenedor Medio bici UV */
  .bg-1 {
      color: #273746;
      background-color: #124195;
  }


  /*color de letra*/
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  /*letras de contenedores del apartado de BICI UV*/
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }

  /*botones del apartado de BICI UV*/
  .btn {
      padding: 10px 20px;
      background-color: #0062A2;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  /*margenes*/
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  /*Encabezados de ventana emergente, BICI UV*/
  .modal-header, h4, .close {
      background-color: #005DA1;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
/*Encabezados y cuerpo ventana emergente*/
  .modal-header, .modal-body {
      padding: 40px 50px;
      /*background-color: #333;
      color: #fff !important;*/
  }
  
  .nav-tabs li a {
      color: #C50000;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  

  /*colores barra de navegacion superior*/
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #0072C5;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }

  /*color de la letra de botones en barra de navegacion sin seleccionado*/ 
  .navbar li a, .navbar .navbar-brand { 
      color: #fff !important;
  }

  /*color de letras en barra de navegacion*/
  .navbar-nav li a:hover {
      color: #3ADF00 !important;
  }

   /*cambia color de item seleccionado en el nav bar*/
  .navbar-nav li.active a {
      color: #064BBC !important;

      /*background-color: #064BBC !important; */
  }

  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  /*colores en los margenes*/
  .open .dropdown-toggle {
      color: #000000;
      background-color: #000000 !important;
  }
  .dropdown-menu li a {
      color: #B406BC   !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #0062A2;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">Inicio</a></li>
        <li><a href="#beta">BETA</a></li>
        <li><a href="#uv">Iniciar Sesion</a></li>
        <li><a href="#equipo">Equipo</a></li>
        <li><a href="#contact">Contacto</a></li>
          </ul>
        </li>
        
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="bicibeta___.jpg" alt="New York" width="800" height="300">
        <div class="carousel-caption">
          <h1> Bienvenidos</h1>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="fei_.jpg" alt="Chicago" width="1000" height="500">
        <div class="carousel-caption">
          <h3>Facultad de Estadistica e Informatica</h3>
            <p>"El lugar donde buenos programadores se hacen grandes programadores"</p>
          <p> Sistema desarrollado por estudiantes de esta facultad</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="rec__.jpg" alt="Los Angeles" width="1000" height="500">
        <div class="carousel-caption">
          <h3>Universidad Veracruzana</h3>
          <p>Nuestra Alma mater</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div class="table-responsive">
<table class="table table-hover">
  <caption> <center> <h1> Actualizaciones </h1> </center> </caption>
    
    <thead>
        <tr>
            <th> <a href="update2.html" style="color:#FFFFFF"> 5 de Noviembre de 2017 </a> </th>
            <th> <a href="update.html" style="color:#FFFFFF"> 31 de Octubre de 2017 </a>  </th> 
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
</table>
</div>

<div id="beta" class="container">
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <h3 class="text-center">¡Bienvenido al BETA!</h3>  
  <ul class="nav nav-tabs">
   
  </ul>
  

      <h2>¿Qué hago aquí?</h2>
      <p align="justify"><b> -> H</b>as sido uno de los elegidos para formar parte de un grupo de investigadores universitarios, todo para probar el sitio de nuestra proxima aplicación web, estamos desarrollando este proyecto para una de las experencias educativas de nuestra carrera de Tecnologías Computacionales, de la Facultad de Estadistica e Informatica, aqui en la ciudad de Xalapa, Vercruz.</p> <p><b>-> T</b>e permitirá rentar cualquier equipo de ciclismo en la Zona Universitaria, sin necesidad de ir hasta las instalacciones, con tan solo un click puedas hacerlo.</p>
      <p align="justify"><b> -> A</b>sí el día que tu quieras puedes hacer tu reservación con días o horas de anticipación sin la preocupación de quedarte sin equipo.</p>
      <p align="justify"><b> -> P</b>robablemente en un futuro puedas hacer uso completo de ella, pero para eso necesitamos de tu ayuda "Tester".</p> 
      <p align="justify"><b> -> E</b>xplora, dinos de cualquier falla o error que encuentres en ella, si te gusta la pagina, los colores te llaman la atención, si no te gustan. Tu ayuda nos sirve de mucho en el producto final.</p> 

      <p align="justify"><b> -> E</b>n el apartado de "Contacto" te dejamos las ligas en donde nos puedes hacer llegar tus comentarios</p>

      <p align="justify"><b> -> N</b>ecesitamos de ti para tener lo mejor en tecnología</p>
    
      <p align="justify"><b> -> E</b>n el superior de esta sección, se encuentra el apartado de actualizaciones donde te notificaremos de las correcciones de errores o implementación de nuevas funciones, te recomendamos estar al pendiente de la pagina y dar click sobre a cada una de las fechas para estar informado </p>
      
      <p align="justify"><b> -> Sin otro Pendiente más, te damos la bienvenida: </b></p>

      <p align="right"><b> El equipo de desarrollo de "BICI-UV" </b> </p>

    </div>
    
  </div>
  </div>
    


<!-- Container Opciones del -->
<div id="uv" class="bg-1">
  <div class="container">
    <h3 class="text-center">Bienvenido a Bici UV</h3>
    <p class="text-center">Selecciona la Opción que se ajuste a ti </p>
    <br>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="luzio_bici.jpg" alt="Paris" width="400" height="300">
          <p><strong>Iniciar Sesion</strong></p>
          <p>Como miembro de la comunidad universitaria</p>
          <button class="btn" data-toggle="modal" data-target="#modal_login">Ingresar</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="luzio.jpg" alt="New York" width="400" height="300">
          <p><strong>Registrarse</strong></p>
          <p>Con tus datos como estudiante, es rapido, facil y seguro</p>
          <button class="btn" data-toggle="modal" data-target="#modal_sign_up">Comenzar</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="logouv.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>Mas Información</strong></p>
          <p>Ingresa a la pagina oficial de la universidad y sus redes </p>
          <a href="https://www.uv.mx/" return false;"><button class="btn" data-toggle="modal" >Acceder</button></a>
        </div>
      </div>
    </div>
  </div>


<!-- Contenedores Prop up -->



  <!-- Modal Iniciar Sesion-->
  <div class="modal fade" id="modal_login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-check"></span> Iniciar Sesion</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="Login.php" method="POST">
            <div class="form-group">
              <label for="usuario"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" id="usernam" name="username" placeholder="zSxxxxxxxx">
            </div>
            <div class="form-group">
              <label for="contraseña"><span class="glyphicon glyphicon-eye-close"></span> Contraseña</label>
              <input type="password" class="form-control" id="password" name= "password" >
            </div>
              <button type="submit" class="btn btn-block">Ingresar </button> 
              <button type="submit" class="btn btn-block">Ingresar Admin </button>
              
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- Modal Registrar -->
  <div class="modal fade" id="modal_sign_up" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-cloud-upload"></span> Registrarse</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="Register.php" method="POST">

            <div class="form-group">
              <label for="nombre"><span class="glyphicon glyphicon-align-justify"></span> Nombre Completo</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejem: Javier Garcia Rosendo">
            </div>

            <div class="form-group">
              <label for="usuario_reg"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" id="username_reg" name="username_reg" placeholder="Ejem: zSxxxxxxxx">
            </div>

            <div class="form-group">
              <label for="contraseña_reg"><span class="glyphicon glyphicon-eye-close"></span>Contraseña</label>
              <input type="password" class="form-control" id="password_reg" name="password_reg" placeholder="">
            </div>

            <button type="submit" class="btn btn-block">Registrar</button> 
            <!-- <h3> <a href="renta_admin.html"> <p align="center"> Registrar </a> </h3> -->
              
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contenedor de Equipo -->

<div id="equipo" class="container text-center">
  <h3>El Equipo</h3>
  <p><em>Lo que nos apasiona, "codear"</em></p>
  <p align="justify">Somos un equipo de desarrollo amateur, provenientes de la facultad de Estadística e Informática, emprendedores, creativos y perseverantes, con múltiples habilidades en el campo tecnológico, nuestras únicas limitantes son:  nuestra imaginación, creatividad y nuestras ganas de innovar.</p>
  <p>La tecnología esta en constante evolución</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Lapin Tec</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="dev__.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>- Desarrollador Web en HTML5 y Bootstrap</p>
        <p>- Interesado por las artes y la ciencia </p>
        <p>- Aprendio a jugar, despues a leer</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Fresh Axyz</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="dev__2.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>- Programador en PHP y MySQL</p>
        <p>- Fan de Maura</p>
        <p>- Informatico y ¿Jugador de Fut-bol?</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Mvxrs24</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="dev__3.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>- Programador en PHP y MySQL </p>
        <p>- Es biker</p>
        <p>- ¿Musica? De todo un poco </p>
      </div>
    </div>
  </div>
</div>

<!-- Contenedor Contacto -->

<div id="contact">
<br>
<br>
 <h3 class="text-center">Contacto</h3>
  <p class="text-center"><em>Gracias Por tu Ayuda !</em></p>

   <p class="text-center">Dejanos tus comentarios sobre tu experiencia del beta:</p>
      <p class="text-center">Con el Asunto: BETA BICI UV</p>
      <p class="text-center"><span class="glyphicon glyphicon-phone"></span>Facebook: Javier Garros</p>
      <p class="text-center"><span class="glyphicon glyphicon-envelope"></span>Email: javiergarros07@gmail.com</p>
      
      </div>

<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(19.541228, -96.927642);
var mapProp = {center:myCenter, zoom:15, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK1voYY5MKI0JQ7c7nkWPgXsV3JEOH7Tg&callback=myMap" async defer> </script>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Universidad Vercruzana Facultad Estadistica e Informatica - Av. Xalapa, Obrero Campesino, 91020 Xalapa Enríquez, Ver. </p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
