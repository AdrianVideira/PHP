<?php
    # Recogemos los datos del formulario.
    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        echo "Hola ". $nombre ."<br>";
    }else{
        echo "No se proporcionó un nombre";
    }

    if(isset($_POST['contraseña'])){
        $contraseña = $_POST['contraseña'];
        if(strlen ($contraseña) < 5){
            echo "La contraseña es muy corta";
        }
    }else{
        echo "No se ha proporcionado una contraseña";
    }

?>


