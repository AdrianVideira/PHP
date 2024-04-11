<?php
    //Agregamos las funciones de modelo.php para usarlas en este archivo.
    include("modelo.php");
    
    //Verificamos que los datos se han enviado mediante el método POST.
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if (empty($_POST['nombre'])){
            echo "Se requiere nombre <br>";
        } else {
            $nombre = $_POST['nombre'];
            echo $nombre."<br>";
        }

        if (empty($_POST['apellidos'])){
            echo "Se requiere apellidos <br>";
        } else {
            $apellidos = $_POST['apellidos'];
            echo $apellidos."<br>";
        }

        if (empty($_POST['email'])){
            echo "Se requiere email <br>";
        } else {
            $email = $_POST['email'];
            echo $email."<br>";
        }

        if (empty($_POST['contraseña'])){
            echo "Se requiere contraseña <br>";
        } else {
            $contraseña = $_POST['contraseña'];
            echo $contraseña."<br>";
        }

        if (empty($_POST['tlfn'])){
            echo "Se requiere tlfn <br>";
        } else {
            $tlfn = $_POST['tlfn'];
            echo $tlfn."<br>";
        }

        if(!empty($nombre) && !empty($apellidos) && !empty($email) && !empty($contraseña) && !empty($tlfn)){
            $nuevoUsuario = agregarUsuario($nombre, $apellidos, $email, $contraseña, $tlfn);
            $mensaje = "Registro existoso. ¡Bienvenido, $nombre !";
            
        } else {
            $mensaje = "Hubo un error en el registro. Verifica tus datos";        
        }

    }

    //Agregamos las funciones de vista.php para usarlas en este archivo.
    include("vista.php");

?>