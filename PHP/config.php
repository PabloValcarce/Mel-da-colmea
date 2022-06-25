<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "tienda";

    $conn  = mysqli_connect($server,$user,$pass,$database);
    if(!$conn){
        die("Conexión fallida");
    }
?>