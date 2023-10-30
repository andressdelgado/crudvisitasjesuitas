<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Borrar Lugar</title>
    </head>
    <body>
        <?php
            require_once("../../configdb.php");
            $ip = $_GET['ip'];
            $consulta = "DELETE FROM lugar WHERE ip = '$ip'";
            $resultado = $conexion->query($consulta);
            echo "<h3>CAMBIOS REALIZADOS</h3><br>";
            $conexion->close();
            echo '<a href="../index.html">Volver</a><br>';
            echo '<a href="../../index.html">Volver al menú</a>';
        ?>
    </body>
</html>
