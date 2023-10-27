<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Lugar</title>
    </head>
    <body>
        <!--FORMULARIO PARA BUSCAR EL LUGAR-->
        <h1>INTRODUCE LA IP DEL LUGAR QUE QUIERES MODIFICAR</h1>
        <form action="index.php" method="post">
            <label for="ip">Introduce la ip del lugar:</label><br>
            <input type="text" name="ip"><br>
            <input type="submit" name="submit">
        </form>
        <?php
        if(isset($_POST["submit"])) {
            require_once("../../configdb.php");
            $ip = $_POST["ip"];

            $consulta = "SELECT ip, lugar, descripcion FROM lugar WHERE ip = '$ip'";

            $resultado = $conexion->query($consulta);
            if ($resultado->num_rows > 0) {
                echo "<h2>Resultados:</h2>";
                $fila = $resultado->fetch_assoc();
                echo "IP: " . $fila["ip"] . '<br>' . "Lugar: " . $fila["lugar"] . '<br>' . "Descripcion: " . $fila["descripcion"];
                echo "<h2>Introduce los nuevos datos del lugar</h2>";
                //FORMULARIO PARA MODIFICAR EL LUGAR
                echo '<form action="modificar.php" method="post">';
                echo '<label for="ip">IP:</label><br>';
                echo '<input type="text" name="ip"><br>';
                echo '<label for="lugar">Nuevo nombre del lugar:</label><br>';
                echo '<input type="text" name="lugar"><br>';
                echo '<label for="descripcion">Nueva descripcion del lugar:</label><br>';
                echo '<input type="text" name="descripcion"><br>';
                echo '<input type="submit" name="submit">';
                echo '</form>';
            } else {
                echo "No se encontraron resultados para la ip proporcionada.<br>";
            }
            $conexion->close();
        }
        ?>
        <a href="../index.html">Volver</a><br>
        <a href="../../index.html">Volver al menú</a>
    </body>
</html>
