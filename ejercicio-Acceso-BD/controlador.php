<?php
    //Para tener acceso a las consultas a BD.
    include "modelo.php";

    function pintarListaCiudades($ordenar){
        // Hacemos consulta a BD.
        $datos = getListaCiudades($ordenar); //Función del modelo.

        // Si no hay datos que mostrar, lo indicamos.
        if(is_string($datos)){
            echo $datos;
         
         // Si recibimos datos...
        }else{
            //Construimos la tabla para mostrarlos.
            echo "<table>
                    <tr>
                        <th>ID</th>\n
                        <th>Nombre</th>\n
                        <th>Código País</th>\n
                        <th>Comunidad</th>\n
                        <th>Población</th>\n
                        <th>¿Elininar?</th>\n
                    </tr>\n";                    

                    // Obtenemos cada una de las filas de datos que nos devolvió la consulta.
                    // mysqli_fetch_assoc avanza entre cada uno de los elementos del array
                    // que contiene cada vez que se llama, hasta que no haya más,
                    // por eso se puede usar en un while.

                    while($fila = mysqli_fetch_assoc($datos)){
                        echo "<tr>
                                <td>". $fila["ID"] . "</td>\n
                                <td>". $fila["Name"] . "</td>\n
                                <td>". $fila["CountryCode"] . "</td>\n
                                <td>". $fila["District"] . "</td>\n
                                <td>". $fila["Population"] . "</td>\n
                                <td><form action='vista-borrar.php' method='POST'>
                                    <input type ='hidden' name='id' value='". $fila["ID"] . "'>
                                    <input type ='hidden' name='nombre' value='". $fila["Name"] . "'>
                                    <input type = 'submit' name = 'borrar' value = 'Borrar'>
                                </form></td> \n                                                
                            </tr>";
                    } //fin del while.  
                    
                    //Opcion para mostra los datos en la tabla con un foreach - más sencillo -
                    /*foreach ($datos as $fila){
                        echo "<tr>
                                <td>" . $fila["ID"] . "</td>\n
                                <td>" . $fila["Name"] . "</td>\n
                                <td>" . $fila["CountryCode"] . "</td>\n
                                <td>" . $fila["District"] . "</td>\n
                                <td>" . $fila["Population"] . "</td>\n                        
                        </tr>";
                    }*/
                    
                "</table>";

        }// fin del else.

    } // fin de la función.

    
    function listaPaises(){
        // Obtenemos los datos.
        $datos = getListaPaises();

        //Mostramos los datos.
        if(is_string($datos)){
            echo $datos; // Si está vacia la lista, nos devolvera el mensaje de la funcion getListaPaises y lo mostraremos por pantalla.
        } else {
            while($fila = mysqli_fetch_assoc($datos)){ //Convertimos el contenido de cada fila en un array asociativo y lo mostramos.
                echo "<option value='". $fila["Code"] . "'>". $fila["Name"] . "</option>";
            }
        }

    }// fin de la función.


    function listaDistritos(){
        // Obtenemos los datos.
        $datos = getListaDistritos();

        //Mostramos los datos.
        if(is_string($datos)){
            echo $datos; // Si está vacia la lista, nos devolvera el mensaje de la funcion getListaPaises y lo mostraremos por pantalla
        } else {
            while($fila = mysqli_fetch_assoc($datos)){ //Convertimos el contenido de cada fila en un array asociativo y lo mostramos.
                echo "<option value ='" . $fila["District"] . "'>". $fila["District"]."</option>";
            }
        }

    }// fin de la función.

    


?>