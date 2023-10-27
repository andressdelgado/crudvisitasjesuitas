<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Jesuita</title>
    </head>
    <body>
        <!--FORMULARIO PARA BUSCAR AL JESUITA-->
        <h1>INTRODUCE EL NÚMERO DEL JESUITA QUE QUIERES MODIFICAR</h1>
        <form action="index.php" method="post">
            <label for="idJesuita">Introduce el número de puesto:</label><br>
            <input type="text" name="idJesuita"><br>
            <input type="submit" name="submit">
        </form>
        <?php
        if(isset($_POST["submit"])) {
            require_once("../../configdb.php");

            $idJesuita = $_POST["idJesuita"];

            $consulta = "SELECT idJesuita, nombre, firma FROM jesuita WHERE idJesuita = '$idJesuita'";
            $resultado = $conexion->query($consulta);
            if ($resultado->num_rows > 0) {
                echo "<h2>Resultados:</h2>";
                $fila = $resultado->fetch_assoc();
                echo "ID Jesuita: " . $fila["idJesuita"] . '<br>' . "Nombre: " . $fila["nombre"] . '<br>' . "Firma: " . $fila["firma"];
                echo "<h2>Introduce los nuevos datos del jesuita</h2>";
                //FORMULARIO PARA MODIFICAR AL JESUITA
                echo '<form action="modificar.php" method="post">';
                echo '<label for="idJesuita">Número de puesto:</label><br>';
                echo '<input type="text" name="idJesuita"><br>';
                echo '<label for="nombre">Nuevo nombre del jesuita:</label><br>';
                echo '<input type="text" name="nombre"><br>';
                echo '<label for="firma">Nueva firma del jesuita:</label><br>';
                echo '<input type="text" name="firma"><br>';
                echo '<input type="submit" name="submit">';
                echo '</form>';
            } else {
                echo "No se encontraron resultados para el número proporcionado.<br>";
            }
            
        }
        ?>
        <a href="../index.html">Volver</a><br>
        <a href="../../index.html">Volver al menú</a>
    </body>
</html>
