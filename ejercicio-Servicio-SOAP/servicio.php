<?php
    //Define: A donde nos tienen que estar consultando.

    require "metodos.php";
    
    // Direccion del recurso a consultar.
    $opciones = array("uri" => "http://localhost/ejercicios/ejercicio-Servicio-SOAP/servicio.php");

    // En el primer parametro, iría la especificación de WDSL, (no es necesaria).
    $servidor = new SoapServer(null, $opciones);

    // setClass(), sirve para asociar las clases de PHP con el servidor SOAP
    // de esta forma podremos acceder a los métodos PUBLICOS de las clases que hemos asociado al servidor.
    $servidor -> setClass("Metodos");

    //La función handle() es esencial en un servidor SOAP en PHP.Es lo que inicia el servidor
    // y lo pone en un estado de escucha para recibir y manejar solicitudes SOAP entrantes.
    $servidor -> handle();


?>

