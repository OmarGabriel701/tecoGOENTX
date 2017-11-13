<html>
    <form action="renta111.php" method="POST">
    <?php
        $con = mysqli_connect("localhost", "id3468729_shavots", "shavots123", "id3468729_bicicletas");
        
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
     $status = '';
     mysqli_stmt_bind_result($statement, $id_usuario, $nombre, $username, $password,$status);
        
        $response = array();
        $response["success"] = false;  
        
        while(mysqli_stmt_fetch($statement)){
            $response["success"] = true;  
            //$response["nombre"] = $nombre;
            $response["id_usuario"] = $id_usuario;
            $response["username"] = $username;
            //$response["password"] = $password;
            echo "<input type='hidden' name='id_usuario' value=".$id_usuario." />";
            echo "<input type='hidden' name='username' value=".$username." />";
            //header("Location: renta111.php");
        }
        //echo json_encode($response);
       
    ?>
    <button type="submit" class="btn btn-block">Continuar</button>
    </form>
</htlm>