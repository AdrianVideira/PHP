<?php
    
    function crearConexion(){
        //Datos de conexion
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "world";

        // establecemos la conexion con la base de datos.
        $conexion = mysqli_connect($host, $user, $password, $database);

        //Si hay un error en la conexión, lo mostramos y detenemos.
        if(!$conexion){
            die("<br>Error de conexion con la base de datos: " . mysqli_connect_error());
        }
        // Si está todo correcto, enviamos la conexion con la base de datos.
        else{
            echo "<br>Conexion correcta a la base de datos: ". $database;
        }

        return $conexion;
    }


    // Función para cerrar conexion.
    function cerrarConexion($conexion){
        mysqli_close($conexion);
    }


    function ciudadMasPobladaEnBD(){
        //Establecemos conexion con la base de datos
        $conexion = crearConexion();
        
        //Generamos la consulta.
        $consulta = "SELECT * FROM city WHERE Population = (SELECT MAX(Population) FROM city)";

        //Hacemos la consulta.
        $result = mysqli_query($conexion, $consulta);

        //Manejamos el resultado.
        if($result > 0){
            return $result;
        } else {
            echo "No se han obtenido datos";
        }

        //Cerramos la conexion con la BD.
        cerrarConexion($conexion);        

    }


?>