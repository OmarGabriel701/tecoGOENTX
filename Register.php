<?php
    $con = mysqli_connect("localhost", "id3341958_bicicletasuv", "morales24", "id3341958_bicicletasuv");
    
    $nombre = $_POST["nombre"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $statement = mysqli_prepare($con, "INSERT INTO usuario (nombre, username, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sss", $nombre, $username, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>