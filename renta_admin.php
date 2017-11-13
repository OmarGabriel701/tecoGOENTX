<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Beta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  
   body {
      font: 400 15px/1.8 Lato, sans-serif;
      background-image: url(fondo-negro.jpg)
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
      background-color: #2E2E2E;
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
      background-color: #4B4B4B;
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

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"> Salir </a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<!-- Third Container (Grid) -->
<br> 
<br>
<br>
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong> Administrador </strong></p>
      
        <img src="blitz.jpeg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div>
        <br>
        <br>
      </div>
    </div>  
    <div class="col-sm-4"> 
      <p>Administrar Equipo</p>
      <img src="admin.jpg" class="img-responsive margin" style="width:100%" alt="Image" a href="tabla_admin.html">
      <br>
      <center><a href="tabla_admin.php" style="color:#FFFFFF"> Acceder </a> 
    </div>
    <div class="col-sm-4"> 
      <p>¡Visita a Luzio y Liz!</p>
      <img src="facebook.jpg" class="img-responsive margin" style="width:100%" alt="Image">
      <br>
      <center> <a href="https://www.facebook.com/Luziouv/" return false;" style="color:#FFFFFF"> ! Vamos ! </a> </center>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Universidad Veracruzana</p> 
</footer>

</body>
</html>