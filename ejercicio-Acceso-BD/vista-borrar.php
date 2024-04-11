<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista-borrar</title>
</head>
<body>
    <h3>Ciudad Borrada:</h3>
    <?php
        include "modelo.php";

       //Recogemos los datos envíados por el formualrio genrado por el archivo controlador.php
       $identificador = $_POST['id'];
       $nombre = $_POST['nombre'];
       
       borrarCiudad($identificador);

       echo "<p>Se ha borrado la ciudad: </p>";
       echo "<p>Ciudad: ".$nombre." y con identificador: " . $identificador. "</p>";

    ?>

    <br>
    <a href="vista.php"> Pincha aquí para volver a la vista principal</a>
   
</body>
</html>