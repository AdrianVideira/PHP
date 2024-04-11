<?php
    function crearXML($texto){
        //Creamos un nuevo fichero
        $xml = new DOMDocument("1.0","UTF-8");
        //Creamos el elemento.
        $blog = $xml -> createElement("blog");
        //Lo establecemos como elemento raiz.
        $xml -> appendChild($blog);
        //Creamos nuevo elemento
        $comentario = $xml -> createElement("comentario", $texto);
        //Añadimos el elemento nuevo al elemento raiz.
        $blog -> appendChild($comentario);
        //Establecemos el valor del formato de salida.
        $xml -> formatOutput = true;
        //Guardamos el fichero
        $xml -> save("xml/blog.xml");
    }

    // Ejecutamos la función y le pasamos por parámetro el texto que queremos generar en el xml.
    crearXML("Mi primera frase escrita en un archivo xml");
    echo "Archivo generado";


?>