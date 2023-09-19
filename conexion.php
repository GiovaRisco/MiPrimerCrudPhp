<?php

    $servidor = "localhost";
    $db = "crudphp1";
    $username = "root";
    $password  ="admin2023$";

    try {
        $conexion = mysqli_connect($servidor,$username,$password,$db);
    } catch (Exception $e) {
        echo "No se conectó";
        echo $e -> getMessage();
    }
