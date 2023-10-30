<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Lugar</title>
    </head>
    <body>
        <?php
            require_once("../../configdb.php");
            if (!isset($_POST['submit'])){
            $ip_original = $_GET['ip'];
            echo "<h2>Introduce los nuevos datos del lugar</h2>";
            //FORMULARIO PARA MODIFICAR EL LUGAR
            
            echo '<form action="index.php" method="post">';
            // Agrega un campo oculto para mantener el valor de 'ip_original'
            echo '<input type="hidden" name="ip_original" value="' . $ip_original . '">';
            echo '<label for="ip">IP:</label><br>';
            echo '<input type="text" name="ip"><br>';
            echo '<label for="lugar">Nuevo nombre del lugar:</label><br>';
            echo '<input type="text" name="lugar"><br>';
            echo '<label for="descripcion">Nueva descripcion del lugar:</label><br>';
            echo '<input type="text" name="descripcion"><br>';
            echo '<input type="submit" name="submit">';
            echo '</form>';}
            if (isset($_POST['submit'])) {
                // Obtén el valor de 'ip_original' del campo oculto
                $ip_original = $_POST['ip_original'];
                $ip = $_POST["ip"];
                $lugar = $_POST["lugar"];
                $descripcion = $_POST["descripcion"];
                $consulta = "UPDATE lugar SET ip='$ip', lugar='$lugar', descripcion='$descripcion' WHERE ip = '".$ip_original."'";
            
                echo $consulta;
                $resultado = $conexion->query($consulta);
                echo "<h3>CAMBIOS REALIZADOS</h3><br>";
                $conexion->close();
                echo '<a href="../../index.html">Volver al menú</a>';
            }
        ?>
    </body>
</html>
