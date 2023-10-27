<?php
    require_once("../../configdb.php");

    $idJesuita = $_POST["idJesuita"];
    $nombre = $_POST["nombre"];
    $firma = $_POST["firma"];
    //CODIGO PARA REALIZAR LA INSERCION DEL JESUITA
    $consulta = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$idJesuita','$nombre', '$firma')";
    $resultado = $conexion->query($consulta);
    
    echo "<h3>ALTA REALIZADA</h3>";
    $conexion->close();
    echo '<a href="index.html">Volver</a><br>';
    echo '<a href="../../index.html">Volver al menú</a>';

?>