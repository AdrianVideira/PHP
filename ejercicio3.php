<?php
    /* Crear código php que haga lo siguiente:
     -Sumar primeros 10 numeros pares.
     -Multiplicar los 10 primeros números impares.
     */

    # Declaramos variables para usar dentro del bucle for.
    $numeroPar = 0;
    $numeroImpar = 1;

    for($i=0; $i<=20; $i++){
        if($i%2 == 0){
            echo "<strong>$i</strong> es un número par <br>";
            $numeroPar += $i;
            echo "La suma es:  $numeroPar<br>";
            echo "----------------------------- <br>";
           
        }else{
            echo "<strong>$i</strong> es un número impar <br>";
            $numeroImpar *= $i;
            echo "La multiplicación es: $numeroImpar<br>";
            echo "----------------------------- <br>";
        }
    }
    echo "La suma de todos los números pares es : $numeroPar <br>";
    echo "La multiplicación de todos los números impares es: $numeroImpar <br>";
    

?>