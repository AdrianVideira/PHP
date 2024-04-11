<?php
    // Función para generar conexion con Base de Datos.

    function crearConexion($dataBase){
        // Datos de conexion.
        $host = "localhost"; // Servidor
        $user = "root"; // Nombre usuario
        $password = "";
    
        // Establecemos conexion con la base de datos
        $connection = mysqli_connect($host, $user, $password, $dataBase);

        if(!$connection) {
            //echo "Error. No se pudo conectar a MySQL" . PHP_EOL;
            die("Error de conexion con la base de datos: ". mysqli_connect_error());
            
        }else{
            echo "Éxito: La conexión se realizó correctamente con la BD: " . $dataBase . "<br>";
        }

        return $connection;
    
    }

    // Función para cerrar conexion.
    function cerrarConexion($connection){
        mysqli_close($connection);
    }
    
    


?>