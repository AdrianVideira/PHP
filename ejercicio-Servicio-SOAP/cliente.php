<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio Web</title>
</head>
<body>
    <?php
        //Definicion de las opciones de configuración para el cliente SOAP.
        // 1º- La ubicación del servidor SOAP.
        // 2º- EL URI del servidor SOAP. 
        $opciones = array("location" => "http://localhost/ejercicios/ejercicio-Servicio-SOAP/servicio.php", "uri" => "http://localhost/ejercicios/ejercicio-Servicio-SOAP/");

        //Creación de una instancia del cliente SOAP.
        $cliente = new SoapClient(null, $opciones);

        // Llamada al método "saluda" del servidor SOAP.
        echo $cliente -> saluda();
        
        echo "<br>";
        
        //Llamada al método "ciudadMasPoblada" del servidor SOAP.
        echo $cliente -> ciudadMasPoblada(); 
    ?>

</body>
</html>