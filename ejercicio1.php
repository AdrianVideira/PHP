<?php
# Practia sobre fechas en PHP
# Uso de la función Date.

//Imprime el día de la semana
echo date("l");
echo "<br>";

//Imprime algo como: Monday 8th of August 2005 03:12:46 PM
echo date('l js \of F Y h:i:s A');
echo "<br>";

// Numero de día del año
echo date('z');
echo "<br>";

// Día de la semana.
echo date('\T\o\d\a\y \i\s l');
echo "<br>";

// Horas minutos y segundos con dos dígitos
echo date('g \h\o\r\a\s, i \m\i\n\u\t\o\s, s \s\e\g\u\n\d\o\s');
echo "<br>";

// Configurar Idioma Español para la fecha
setlocale(LC_TIME, 'es_ES.UTF-8', 'esp');

$formatoFechaHora="Día %A, %d de %B de %Y hora %H:%M:%S";
$strf=strftime($formatoFechaHora);
echo ('Utilizando strftime (Día %A, %d de %B de %Y hora %H:%M:%S),  muestra:<br>'."$strf</br>");

?>


