<?php
    /*
    Práctica sobre SESIONES Y COOKIES en PHP.
    - Sesiones: Las sesiones se establecen entre el cliente y servidor de dos formas:
        URL o Cookies.
        URL los datos se envián dentro de URL mediante metodo POST
        Cookies -> archivo que se almacena en el pc del cliente con datos necesarios para mantener sesion.
    */

    /*
    Pasos del mantenimiento de estado de uns Sesion.
    1- Autenticacion del usuario
    2- Inicio sesion
    3- Trabajar con la sesion
    4- Finalizar sesion
    */
    

    // Se crea la sesion:
    session_start();
    // Comprueba si la variable está definida y le asigna un valor.
    if(!isset($_SESSION["temps"])){
        $_SESSION['temps']=0;
    }else{
        $_SESSION['temps']= time();
        // Cerramos sesion
        session_destroy(); 
    }
    echo $_SESSION['temps'];



?>