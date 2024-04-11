<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar HTML></title>
</head>
<body>
    <h2>Publicar noticia</h2>
    <form action="generarHTML.php" method="POST">
        <label for="titulo">Titulo:</label><br>
        <input type="text" id="titulo" name="titulo">
        <br>
        <label for="cuerpo">Cuerpo:</label><br>
        <input type="text" id="cuerpo" name="cuerpo">
        <br>
        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor"><br>
        <br>
        <input type="submit" id="enviar" name="Enviar">
    </form>

    <?php

        include "baseDatos.php";
        //Si se envía el formulario, recibimos los datos en este mismo archivo y los usamos.
        
        if(isset($_POST["Enviar"])){
            if(agregarNoticia($_POST["titulo"], $_POST["cuerpo"], $_POST["autor"])){
                echo "Noticia guardada <br>";                
                actualizarFicheroXML();
                generarHTML();
                echo"HTML generado";

            }else{
                echo "Ha ocurrido un error";
            }
        }

    ?>
    
</body>
</html>