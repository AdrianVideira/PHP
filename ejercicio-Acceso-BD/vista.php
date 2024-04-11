<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <title>Ejercicio9</title>
</html>
<body>

  <h1>Base de datos países</h1>

  <!-- Añadimos botones -->
  <form action="vista-formulario.php" method="POST">
    <input type="submit" name="agregar" value="Añadir Ciudad">
  </form>
  <br>
  <form action="vista.php" method="GET"> 
  <!-- Los datos se enviarán a este mismo archivo para pasarselos a la función del controlador pintarListaCiudades -->
    <input type="submit" name="ordenar" value="creciente">
    <input type="submit" name="ordenar" value="decreciente">
  </form>
  <br>


  <?php

    include "controlador.php";

    //Recogemos los datos del formulario para ordenar la lista según nos indique el usuario.
    $ordenar = $_GET['ordenar'];
    // Se lo pasamos por parámetro a la función del controlador, que a su vez se la pasará a la función
    // del modelo para filtrar la consulta según las indicaciones del usuario.
    pintarListaCiudades($ordenar);
    

  ?>

</body>

