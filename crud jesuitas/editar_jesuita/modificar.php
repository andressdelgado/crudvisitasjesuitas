<?php
    require_once("../../configdb.php");
    require_once("index.php");
    $idJesuita = $_POST["idJesuita"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];
    //CONSULTA PARA MODIFICAR AL JESUITA
    $consulta = "UPDATE jesuita SET idJesuita='$idJesuita', nombre='$nombre', firma='$firma' WHERE idJesuita = '$jesuitacambiar'";
    echo $consulta;
    $resultado = $conexion->query($consulta);
    echo "<br><h3>CAMBIOS REALIZADOS</h3>";
    $conexion->close();
    echo '<a href="index.php">Volver</a><br>';
    echo '<a href="../../index.html">Volver al menú</a>';
    
?>