<?php

    // COOKIE
    // Creamos la cookie con los parámetros que queramos.
    setcookie("miCookie", "Hola! esta es mi primera cookie", time()+5);
    // Mostramos la cookie.
    echo $_COOKIE['miCookie'];

    
?>