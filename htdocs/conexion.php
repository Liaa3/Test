<?php

include 'config.php';

$conexion = mysqli_connect(HOST, USER, PASS, NAME);        
        
if (mysqli_connect_errno($conexion)) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($conexion, "utf8mb4");