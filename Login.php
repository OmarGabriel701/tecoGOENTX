<?php
    $con = mysqli_connect("localhost", "id3341958_mvxrs24", "morales24", "id3341958_bicicletasuv");
    
    $username = $_POST["username"];
    $password = $_POST["password"];



    //echo("Name : $returnName , Email : $returnEmail , Password : $returnPassword");﻿
    
    $statement = mysqli_prepare($con, "SELECT * FROM usuario WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
 $id_usuario = '';
 $nombre = '';
 $username = '';
 $password = '';
 mysqli_stmt_bind_result($statement, $id_usuario, $nombre, $username, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        //$response["success"] = true;  
        //$response["nombre"] = $nombre;
        //$response["username"] = $username;
        //$response["password"] = $password;
        header("Location: usuario.html"); 
    }
    
    echo json_encode($response);
?>