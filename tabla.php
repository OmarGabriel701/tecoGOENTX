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
      color: #777;
  }
  h1 {
    margin: 10px 0 30px 0;
      letter-spacing: 2px;      
      font-size: 20px;
      color: #273746;
  }


  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 2px;      
      font-size: 20px;
      color: #111;
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
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
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
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
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
<body>

<!-- Navbar -->
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
      <li><a>BETA</a></li>
        <li><a href="index.php">Salir</a></li>
          </ul>
        </li>
        
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        
      </ul>
    </div>
  </div>
</nav>


<div class="table-responsive">
<table class="table table-hover">
 <br>
 <br>
  <caption> <center> <h1>  Bicicletas Disponibles </h1> </center> </caption>
    <thead>
        <tr>
            <th>Foto</th>
            <th>Modelo</th> 
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
			$usuario = "id3468729_shavots";
	   		$password = "shavots123";
			$servidor = "localhost";
		    $basededatos = "id3468729_bicicletas";

			// creación de la conexión a la base de datos con mysql_connect()
			$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

			// Selección del a base de datos a utilizar
			$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
			// establecer y realizar consulta. guardamos en variable.
			$consulta = "Select folio, modelo, marca FROM bicicleta WHERE estado='Activo' and disponibilidad='Si';";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    		//echo "<table>";  
			//echo "<tr>";  
			//echo "<th>Nombre</th>";   
			//echo "<th>Nombre 2</th>";  
			//echo "</tr>";  
    			while ($row = mysqli_fetch_row($resultado)){   
        		//echo "<tr>";  
        		//echo "<td>".$row[0]."</td>";  
        		//echo "<td>".$row[1]."</td>";  
        		//echo "</tr>";  
        		echo "<tr>";
                echo "<td><img src='".$row[0]."_bici.jpg' border='0' width='90' height='90'></td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td><button class='btn' data-toggle='modal' data-target='#modal_login'>Rentar</button></td>";
                echo "</tr>";
    			}  
			echo "</tbody>";  
		?>
        
        
        
        
  <!--      <tr>
            <td>Rocky</td>
            <td>Balboa</td>
            <td>López</td>
            <td><button class="btn" data-toggle="modal" data-target="#modal_login">Rentar</button></td>
        </tr>
        <tr>
            <td>Indiana</td>
            <td>Jones</td>
            <td>Perez</td>
            <td><button class="btn" data-toggle="modal" data-target="#modal_login">Rentar </button></td>
      </tr>
        <tr>
            <td>Willy</td>
            <td>Wonka</td>
            <td>Choco</td>
            <td><button class="btn" data-toggle="modal" data-target="#modal_login">Rentar </button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> <button class="btn" data-toggle="modal" data-target="#modal_login" align=right>Generar Rentar</button> </td>
        </tr>
   -->     
        
        
        
        
    </tbody>
</table>
</div>

<div class="table-responsive">
<table class="table table-hover">
 <br>
 <br>
  <caption> <center> <h1>  Tus rentas </h1> </center> </caption>
    <thead>
    <form action="renta111.php" method="POST">
        <?php
			$usuario = "id3468729_shavots";
	   		$password = "shavots123";
			$servidor = "localhost";
		    $basededatos = "id3468729_bicicletas";
		    
		    $i = $_POST["id1"];
		    $username = $_POST["username"];
			// creación de la conexión a la base de datos con mysql_connect()
			$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

			// Selección del a base de datos a utilizar
			$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
			// establecer y realizar consulta. guardamos en variable.
			
			$consulta = "Select bicicleta_folio, horaInicio, ganancia FROM renta WHERE usuario_folio= $i;";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    		//echo "<table>";  
			//echo "<tr>";  
			//echo "<th>Nombre</th>";   
			//echo "<th>Nombre 2</th>";  
			//echo "</tr>";  
    			while ($row = mysqli_fetch_row($resultado)){   
        		//echo "<tr>";  
        		//echo "<td>".$row[0]."</td>";  
        		//echo "<td>".$row[1]."</td>";  
        		//echo "</tr>";  
        		echo "<tr>";
                echo "<td><img src='".$row[0].".jpg' border='0' width='50' height='50'></td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td><button class='btn' data-toggle='modal' data-target='#modal_login'>Finalizar</button></td>";
                echo "</tr>";
    			}  
    			echo "<input type='hidden' name='id_usuario' value=".$i." />";
    			echo "<input type='hidden' name='username' value=".$username." />";
			echo "</tbody>";  
		?>
    </thead>
    
</table>
</div>

<footer class="container-fluid bg-4 text-center">
  <button type="submit" class="btn btn-block">Aceptar y regresar</button>
</footer>
</form>
</body>
</html>
