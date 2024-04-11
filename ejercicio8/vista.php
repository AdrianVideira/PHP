<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if (isset($mensaje)){
            echo "<p>$mensaje</p>";
        }
    ?>


    <form action="controlador.php" method="POST" name="formulario" id="formulario">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" require><br>
        <label for="apellidos">Apellidos</label><br>
        <input type="text" id="apelllidos" name="apellidos" require><br>
        <label for="email">Dirección de email:</label><br>
        <input type="email" id="email" name="email" require><br>
        <label>Contraseña:</label><br>
        <input type="password" name="contraseña" value="" id="contraseña" require><br>
        <label for="tlfn" id="tlfn" name="tlfn">Telefono:</label><br>
        <input type="tel" id="tlfn" name="tlfn" require><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Cancelar">
    </form>
    
</body>
</html>