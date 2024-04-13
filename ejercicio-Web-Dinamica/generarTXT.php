<?php
    include "baseDatos.php";
    //Archivo para generar documentos txt a partir de una consulta a BD "world".
    //Usamo modelo orientado a objetos en vez del procedimental.
    
    //Creamos conexion con BD.
    $con = crearConexion("world");
    //Creamos un archivo para la salida de los datos y establecemos la opcion de escritura/lectura.
    $archivo = fopen("txt/idiomas.txt", "w");
    //Generamos la consulta.
    $sql = $con -> prepare("SELECT Language, Percentage FROM countrylanguage");
    //Ejecutamos la consulta
    $sql -> execute();
    //Obtenemos los resultados.
    $sql -> store_result();
    //Asociamos cada columna devuelta a un valor de una variable.
    $sql -> bind_result($lengua, $porcentaje);
    //Empezmos a escribir el fichero.
    fwrite($archivo, "Porcentaje de uso de lenguas en el mundo:".PHP_EOL);
    //Por cada fila obtenida, escribimos una linea en el archivo.
    while($sql -> fetch()){
        //Escribimos en el fichero
        fwrite($archivo, "La lengua ".$lengua." tiene un uso del " .$porcentaje."% ".PHP_EOL);
    }
    //Una vez escrito el fichero, lo cerramos.
    fclose($archivo);
    //Cerramos la conexion.
    cerrarConexion($con);
    //Mostramos un mensaje por pantalla
    echo "Archivo .txt generado";

?>