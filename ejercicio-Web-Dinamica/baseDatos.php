<?php
    function crearConexion($dataBase){
        //Datos para la conexion
        $host = "localhost";
        $user = "root";
        $password = "";
        //$dataBase = "noticias";

        //Establecemos la conexion con la base de datos
        $conexion = mysqli_connect($host, $user, $password, $dataBase);

        if(!$conexion){
            die('Error de Conexion(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else{
            return $conexion;
        }  
    }

    function cerrarConexion($conexion){
        mysqli_close($conexion);
    }

    function agregarNoticia($titulo, $cuerpo, $autor){
        //Creamos la conexion
        $DB = crearConexion("noticias");
        //Generamos la consulta.
        $sql = "INSERT INTO noticias (Titulo, Cuerpo, Autor) VALUES ('$titulo', '$cuerpo', '$autor')";
        //Hacemos la conosulta.
        $result = mysqli_query($DB, $sql);
        //Manejamos el resultado.
        if($result){
            return $result;
        }else{
            echo"Error al crear la noticia";
        }
        //Cerramos la conexion con la BD.
        mysqli_close($DB);
    }

    function actualizarFicheroXML(){
        $DB = crearConexion("noticias");
        $actualizacion = date("Y-m-d");
        //Creamos un objeto DOMDocument y le pasamos la version y el formato
        $xml = new DOMDocument("1.0", "UTF-8");
        //Creamos el elemento raíz
        $diario = $xml -> createElement("diario");
        //Agregamos el elemento al documento xml.
        $xml -> appendChild($diario);
        //Creamos el primer hijo.
        $actualizacion = $xml -> createElement("UltimaActualizacion", $actualizacion);
        //Agregamos el elemento a la raiz.
        $diario -> appendChild($actualizacion);
        //Creamos el siguiente elemento.
        $noticias = $xml -> createElement("noticias");
        //Agregamos elemento a la raiz.
        $diario -> appendChild($noticias);
        // Generamos consulta para obtener la información y pasarla a los elementos (titulo, cuerpo, autor).
        $sql = "SELECT * FROM noticias";
        // Hacemos la consulta a la BD.
        $result = mysqli_query($DB, $sql);
        // Recuperamos la informacion de la consulta.
        while($fila = mysqli_fetch_array($result)){
            
            $noticia = $xml -> createElement("noticia");
            //Creo los elemento de la noticia y obtengo la información de la columna que nos interesa.
            $titulo = $xml -> createElement("titulo", $fila["Titulo"]);
            $cuerpo = $xml -> createElement("cuerpo", $fila["Cuerpo"]);
            $autor = $xml -> createElement("autor", $fila["Autor"]);
            //Agregamos los elementos hijos a su correspondiente elemento padre.
            $noticias -> appendChild($noticia);
            $noticia -> appendChild($titulo);
            $noticia -> appendChild($cuerpo);
            $noticia -> appendChild($autor);
        };
        cerrarConexion($DB);
        //Formateamos el documento xml para que añada espacios y sangrías.
        $xml -> formatOutput = true;
        $xml -> save("html/noticias.xml");
    }

    function generarHTML(){
        //Creamos la conexion con la BD
        $DB = crearConexion("noticias");
        //Generamos la consulta
        $sql = "SELECT * FROM noticias WHERE ID = (SELECT MAX(ID) FROM noticias)";
        //Hacemos la consulta
        $result = mysqli_query($DB, $sql);
        //Cerramos la conexión, después de hacer la consulta.
        cerrarConexion($DB);
        //Obtenemos el resultado de la consulta.
        $fila = mysqli_fetch_array($result);

        //Creamos un objeto DOMDocument.
        $html = new DOMDocument();
        //Cargamos-Generamos el documento html.
        $html -> loadHTML("<!DOCTYPE html><html><body></body></html>");
        //Creamos los elementos que estarán dentro del documento.
        $titulo = $html -> createElement("h2", $fila["Titulo"]);
        $cuerpo = $html -> createElement("p", $fila["Cuerpo"]);
        $autor = $html -> createElement("h3", $fila["Autor"]);
        //
        $body = $html -> getElementsByTagName("body")[0];
        //Añadimos los elementos creados.
        $body -> appendChild($titulo);
        $body -> appendChild($cuerpo);
        $body -> appendChild($autor);

        $html -> formatOutput = true;
        $html -> saveHTMLFile("html/noticia.html");        
    }

?>