<?php
    // En este fichero generaremos las consultas a la base de datos.
    // Estas consultas se usarán por el controlador en sus funciones.
    require "modelo-conexion.php";

    function getListaCiudades($ordenar){
        //Nos conectamos a la base de datos;
        $DB = crearConexion("world");
        //Definimos la consulta para obtener los datos de la tabla city según el orden dado por el usuario.
        switch($ordenar){
            case 'creciente':
                $sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY ID ASC";
                echo "Ordenado de forma creciente por el ID";
                break;
            case 'decreciente':
                $sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY ID DESC";
                echo "Ordenado de forma decreciente por el ID";
                break;
            default:
                echo "Orden no reconocida.";
                break;            
        }
        //Hacemos la consulta y la almacenamos en una variable.
        $result = mysqli_query($DB,$sql);

        //Si la consulta devuelve algún valor, devolvemos los valores
        if(mysqli_num_rows($result) > 0){
            return $result;
            // Si no, enviamos un mensaje de error.
        }else{
            echo "No hay nada en la lista de ciudades";
        }

        //Cerramos la conexion.
        cerrarConexion($DB);

    }

    function getListaPaises (){
        // Nos conectamos a la base de datos
        $DB = crearConexion("world");
        // Generamos la consulta para obtener los datos
        $sql = "SELECT Code, Name FROM country";

        //Hacemos la consulta.
        $result = mysqli_query($DB, $sql);

        //Comprobamos si existen datos tras la consulta.
        if(mysqli_num_rows($result) > 0){
            return $result; //Retornamos un número.
        } else {
            echo "No hay nada en la lista paises"; //Retornamos un string.
        }

        cerrarConexion();
    } // fin función

    function getListaDistritos(){
        // Nos conectamos a la bse de datos.
        $DB = crearConexion("world");
        // Generamos la consulta para obtener los datos.
        $sql = "SELECT DISTINCT District FROM city";

        //Hacemos la consulta.
        $result = mysqli_query($DB, $sql);

        //Comprobamos si existen datos tras la consulta.
        if(mysqli_num_rows($result) > 0){
            return $result; //Retornamos un número.
        } else {
            echo "No hay nada en la lista distrito"; //Retornamos un String.
        }

        cerrarConexion($DB);        
    }// fin función


    function agregarCiudad($name, $countryCode, $district, $population){
        // Nos conectamos a la base de datos.
        $DB = crearConexion('world');

        // Generamos la consulta
        $query = "INSERT INTO city (Name, CountryCode, District, Population) VALUES ('$name', '$countryCode', '$district', '$population')";

        // Lanzamos la consulta
        $result = mysqli_query($DB, $query);

        // Verificamos si hay respuesta y manejamos posibles errores.
        if($result){
            return $result;
        }else{
            echo "Ha ocurrido un error al insertar la ciudad";
        }
        cerrarConexion($DB);

    }// fin de la función.*/

    function borrarCiudad($identificador){
        //Nos conectamos a la base de datos;
        $DB = crearConexion("world");
        //Definimos la consulta para obtener los datos de la tabla city
        $sql = "DELETE FROM city WHERE ID='".$identificador."'";
        //Hacemos la consulta y la almacenamos en una variable.
        $result = mysqli_query($DB,$sql);

        //Verificamos si hay respuesta y manejamos posibles errores
        if($result){
            return $result;
        }else{
            echo "Ha ocurrido un error al borrar la ciudad";
        }

        cerrarConexion($DB);
    }

    function ordernarDesc(){
        //Nos conectamos a la base de datos;
        $DB = crearConexion('world');
        //Definimos la consulta para obtener los datos de la tabla city;
        $sql = "SELECT * FROM city ORDER BY 'ID' DESC";
        //Hacemos la consulta y la almacenamos en una variable.
        $result = mysqli_query($DB, $sql);

        //Verificamos si hay respuesta.
        if($result){
            return $result;
        }else {
            echo "Ha ocurrido un error al intentar ordenar la lista de forma DESCENDENTE";
        }

        cerrarConexion($DB);
    }

    function ordenarAsc(){
        //Nos conectamos a la base de datos.
        $DB = crearConexion('world');
        // Definimos la consulta para obtener los datos de la tabla city;
        $sql = "SELECT * FROM city ORDER BY 'ID' ASC";
        // Hacemos la consulta y la almacenamos en una variable.
        $result = mysqli_query($DB, $sql);

        //Verificamos si hay respuesta.
        if($result){
            return $result;
        }else{
            echo "Ha ocurrido un error al intentar ordenar la lista de forma ASCENDENTE";
        }

        cerrarConexion($DB);
    }   


?>



