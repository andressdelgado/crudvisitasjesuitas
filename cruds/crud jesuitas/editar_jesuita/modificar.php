<?php

    $conexion = new mysqli('localhost','root','','visitasjesuitas');
    $idJesuita = $_POST["idJesuita"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];
    $consulta = "UPDATE jesuita SET nombre='$nombre', firma='$firma' WHERE idJesuita = '$idJesuita'";
    echo $consulta;
    $resultado = $conexion->query($consulta);
    echo "<h3>CAMBIOS REALIZADOS</h3>";
    $conexion->close();
    echo '<a href="index.php">Volver</a><br>';
    echo '<a href="../../index.html">Volver al menú</a>';
    
?>