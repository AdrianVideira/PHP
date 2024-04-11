<?php
    if (!isset($_COOKIE['repeticiones'])){
        // Creo una cookie por 5 segundos
        setcookie("repeticiones", 10, time() + 5);
        echo "Creo la cookie";
    } else{
        // Al volver a cargar la pçagina, comprubo la cookie y hago cosas.
        echo "ya está definida la cookie<br>";
        $veces = $_COOKIE['repeticiones'];
        for ($i=0; $i<$veces; $i++){
            echo "Esta es la repetición número:".($i + 1)."<br>";
        }
    }


?>


