<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Borrar Jesuita</title>
    </head>
    <body>
        <h1>INTRODUCE EL NOMBRE DEL JESUITA QUE QUIERES BORRAR</h1>
        <form action="index.php" method="post">
            <label for="idJesuita">Introduce el número del jesuita:</label><br>
            <input type="text" name="idJesuita"><br>
            <input type="submit" name="submit">
        </form>
        <?php
        if(isset($_POST["submit"])) {
            $conexion = new mysqli('localhost', 'root', '', 'visitasjesuitas');

            $idJesuita = $_POST["idJesuita"];

            $consulta = "DELETE FROM jesuita WHERE idJesuita = '$idJesuita'";
            $resultado = $conexion->query($consulta);
            echo "<h3>CAMBIOS REALIZADOS</h3>";
            $conexion->close();
            echo '<a href="index.php">Volver</a><br>';
            echo '<a href="../../index.html">Volver al menú</a>';
        }
        ?>
    </body>
</html>
