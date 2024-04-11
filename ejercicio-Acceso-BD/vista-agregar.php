<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar-ciudad</title>
</head>
<body>

    <h3>Ciudad añadida:</h3>

    <?php

        include "modelo.php";


        // Recogemos los parametros introducidos por el usuario en el formulario de "vista-formulario.php".
        // otroDistrito solo estará definida si se marca la casilla.
        if(isset($_POST['otroDistrito'])){
            $distrito = $_POST['nuevoDistrito'];
        }else{
            $distrito = $_POST['distrito'];
        }
        $name = $_POST['nombre']; //Nombre ciudad
        $countryCode = $_POST['pais']; //Pais
        $district = $_POST['nuevoDistrito']; //Distrito
        $population = $_POST['poblacion']; // Poblacion

        //Agregamos la información a la base de datos.
        
        if(agregarCiudad($name, $countryCode, $district, $population)){
            echo "<h3>Se ha añadido la nueva ciudad</h3>"."<br>";
            echo "<p>Estos son los datos: </p>"."<br>";
            echo "<p>Nombre: </p>".$name."<br>";
            echo "<p>Codigo Pais: </p>".$countryCode."<br>";
            echo "<p>Distrito: </p>".$district."<br>";
            echo "<p>Poblacion: </p>".$population."<br>";
        } else{
            echo "No se ha podido añadir la ciudad";
        }

    ?>

    <br>
    <a href="vista.php"> Pincha aquí para volver a la vista principal</a>


</body>
</html>



