<?php
    session_start();
    // Comprueba si la variable está definida y le asigna un valor.
    // Si no existe sesión, entonces establece Adrian como nombre de ususario, si existe establece Null (La borrará).
    if (!isset($_SESSION['Usuario'])){
        $_SESSION['Usuario'] = "Adrian";
    }else{
        $_SESSION['Usuario'] = null;
    }

    // Dependiendo del valor de la variable, muestra un mensaje diferente
    switch ($_SESSION['Usuario']){
        case 'Adrian':
            echo "El varlor de la variable de sesión es Adrian";
            break;
        
        default:
            echo "La variable de sesión no está definida";
            break;
    
    }


?>