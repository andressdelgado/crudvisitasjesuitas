<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Borrar Lugar</title>
    </head>
    <body>
        <!--FORMULARIO PARA BORRAR EL LUGAR-->
        <h1>INTRODUCE LA IP DEL LUGAR QUE QUIERES BORRAR</h1>
        <form action="index.php" method="post">
            <label for="ip">Introduce la ip:</label><br>
            <input type="text" name="ip"><br>
            <input type="submit" name="submit">
        </form>
        <?php
        if(isset($_POST["submit"])) {
            require_once("../../configdb.php");
            $ip = $_POST["ip"];
            //CONSULTA QUE ELIMINA EL LUGAR
            $consulta = "DELETE FROM lugar WHERE ip = '$ip'";
            $resultado = $conexion->query($consulta);
            echo "<h3>CAMBIOS REALIZADOS</h3><br>";
            $conexion->close();
            echo '<a href="index.php">Volver</a><br>';
            echo '<a href="../../index.html">Volver al menú</a>';
        }
        ?>
        <a href="../index.html">Volver</a><br>
        <a href="../../index.html">Volver al menú</a>
    </body>
</html>
