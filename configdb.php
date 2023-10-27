<?php
    //DATOS PARA LA CONEXION A LA BASE DE DATOS
    $host = 'localhost';
    $usuario = 'root';
    $password = '';
    $base_de_datos = 'visitasjesuitas';

    //CREAR LA CONEXION
    $conexion = new mysqli($host, $usuario, $password, $base_de_datos);

    //COMPRUEBA SI HAY ERRORES EN LA CONEXION
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
?>