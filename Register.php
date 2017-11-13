<?php
    $con = mysqli_connect("localhost", "id3468729_shavots", "shavots123", "id3468729_bicicletas");
    
    $nombre = $_POST["nombre"];
    $username_reg = $_POST["username_reg"];
    $password_reg = $_POST["password_reg"];
    $status = "Usuario";
    $statement = mysqli_prepare($con, "INSERT INTO usuario (nombre, username, password, status) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $nombre, $username_reg, $password_reg, $status);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;
    
    header("Location: index.php");
    
    echo json_encode($response);
?>