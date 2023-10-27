<?php

    require_once("../../configdb.php");
    $ip = $_POST["ip"];
    $lugar = $_POST["lugar"];
    $descripcion = $_POST["descripcion"];
    //CODIGO PARA REALIZAR LA INSERCION DEL LUGAR
    $consulta = "INSERT INTO lugar (ip, lugar, descripcion) VALUES ('$ip','$lugar', '$descripcion')";
    $resultado = $conexion->query($consulta);
    echo "<h3>ALTA REALIZADA</h3><br>";
    $conexion->close();
    echo '<a href="index.html">Volver</a><br>';
    echo '<a href="../../index.html">Volver al menú</a>';
?>