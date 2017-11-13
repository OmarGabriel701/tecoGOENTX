<?php
    $con = mysqli_connect("localhost", "id3468729_shavots", "shavots123", "id3468729_bicicletas");
    
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $estado = $_POST["estado"];
    $disponibilidad = $_POST["disponibilidad"];
    
    $statement = mysqli_prepare($con, "INSERT INTO bicicleta (modelo, marca, estado, disponibilidad) VALUES (?, ?, ?, ?)") or die ("La cagaste");
    mysqli_stmt_bind_param($statement, "ssss", $modelo, $marca, $estado, $disponibilidad) or die ("La cagaste 2");
    mysqli_stmt_execute($statement) or die ("La cagaste 3");
    
    $response = array();
    $response["success"] = true;
    
    header("Location: tabla_admin.php");
    
    echo json_encode($response);
?>