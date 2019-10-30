<?php
    //conexion a la base de datos 

    //variables para la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="actividad18";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>
