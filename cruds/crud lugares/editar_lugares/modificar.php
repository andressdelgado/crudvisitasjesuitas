<?php

    $conexion = new mysqli('localhost','root','','visitasjesuitas');
    $ip = $_POST["ip"];
    $lugar = $_POST["lugar"];
    $descripcion = $_POST["descripcion"];
    $consulta = "UPDATE lugar SET lugar='$lugar', descripcion='$descripcion' WHERE ip = '$ip'";
    echo $consulta;
    $resultado = $conexion->query($consulta);
    echo "<h3>CAMBIOS REALIZADOS</h3><br>";
    $conexion->close();
    echo '<a href="index.php">Volver</a><br>';
    echo '<a href="../../index.html">Volver al menú</a>';
?>