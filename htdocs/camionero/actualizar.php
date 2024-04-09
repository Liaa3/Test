<?php

function actualizar_camionero($dni, $nombre, $telefono, $direccion, $salario, $poblacion)
{    
    include './conexion.php';
    $consulta = "UPDATE `camioneros` SET `nombre` = '$nombre', `telefono` = '$telefono', `direccion` = '$direccion', `salario` = '$salario', `poblacion` = '$poblacion' WHERE `camionero`.`dni` = $dni;";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;   
}
