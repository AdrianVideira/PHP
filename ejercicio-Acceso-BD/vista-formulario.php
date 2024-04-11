<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir</title>
</head>
<body>
    <!-- Incluimos el archivo desde donde recogemos la peticion del usuario -->
     <?php include "controlador.php"; ?> 
    <!-- Creamos formulario para recoger los datos de la nueva ciudad -->
    <form action="vista-agregar.php" method="POST">
        <label>Nombre ciudad:</label> <input type="text" name="nombre"><br>
        <label>Pais:</label>
        <select name="pais">
            <?php
                listaPaises();
            ?>
        </select><br>
        <label>Distrito:</label>
        <select name="distrito">
            <?php
                listaDistritos();
            ?>
        </select><br>
        <input type="checkbox" name="otroDistrito"> <label>No está en la lista</label><br>
        <label>Nuevo distrito: </label> <input type="text" name="nuevoDistrito"><br>
        <label>Población: </label> <input type="text" name="poblacion"><br>
        <input type="submit" name="Añadir">

    </form>

    <br>
    <a href="vista.php"> Pincha aquí para volver a la vista principal</a>


</body>
</html>