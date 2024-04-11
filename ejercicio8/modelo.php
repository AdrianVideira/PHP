<?php
    //Modelo: Datos.
    //Definimos un array vacío donde almacenaremos los datos de los ususarios.
    $ususarios = [];
    
    function agregarUsuario($nombre, $apellidos, $email, $contraseña, $tlfn){
        global $usuarios;
        $usuarios[]= [
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'email' => $email, 
            'contraeña' => $contraseña,
            'tlfn' => $tlfn
        ];
    
        
    }

?>