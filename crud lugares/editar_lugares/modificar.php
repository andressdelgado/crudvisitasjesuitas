<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Lugar</title>
</head>
<body>
    <?php
    require_once("../../configdb.php");
    if (!isset($_POST["submit2"])) {
        $ip_original = $_POST['ip'];
        echo $ip_original;
    
        echo '<h2>Introduce los nuevos datos del lugar</h2>';
        // FORMULARIO PARA MODIFICAR EL LUGAR
        echo '<form action="modificar.php" method="post">';
        echo '<input type="hidden" name="ip_original" value="' . $ip_original . '">';
        echo '<label for="ip">IP:</label><br>';
        echo '<input type="text" name="ip"><br>';
        echo '<label for="lugar">Nuevo nombre del lugar:</label><br>';
        echo '<input type="text" name="lugar"><br>';
        echo '<label for="descripcion">Nueva descripción del lugar:</label><br>';
        echo '<input type="text" name="descripcion"><br>';
        echo '<input type="submit" name="submit2">';
        echo '</form>';
    }
    else {
        
        $ip_original = $_POST["ip_original"];
        $ip = $_POST["ip"];
        $lugar = $_POST["lugar"];
        $descripcion = $_POST["descripcion"];
        // CONSULTA PARA MODIFICAR EL LUGAR
        $consulta = "UPDATE lugar SET ip='$ip', lugar='$lugar', descripcion='$descripcion' WHERE ip = '".$ip_original."'";
        $resultado = $conexion->query($consulta);

        if ($resultado) {
            echo "Cambios realizados con éxito.<br>";
        } else {
            echo "Error al modificar el lugar: " . $conexion->error;
        }

        $conexion->close();
    }
    ?>
    
    <a href="index.php">Volver</a><br>
    <a href="../../index.html">Volver al menú</a>
</body>
</html>
