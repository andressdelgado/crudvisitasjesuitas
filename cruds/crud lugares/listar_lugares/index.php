<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Lugares</title>
    </head>
    <body>
        <h1>Lista de Lugares</h1>
        <?php
            $conexion = new mysqli('localhost', 'root', '', 'visitasjesuitas');
            $consulta = "SELECT * FROM lugar";
            $resultado = $conexion->query($consulta);
            if ($resultado->num_rows > 0) {

                echo "<table>";            
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['ip'] . "</td>";
                    echo "<td>" . $fila['lugar'] . "</td>";
                    echo "<td>" . $fila['descripcion'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron resultados.";
            }
            $conexion->close();     
            echo '<a href="../index.html">Volver</a><br>';
            echo '<a href="../../index.html">Volver al menú</a>';       
        ?>
    </body>
</html>