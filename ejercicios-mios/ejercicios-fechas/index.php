<?php
echo strtotime("3/9/2023");
echo "<br>"; //Convierte una fecha dada como string en un timestamp
echo date('Y-m-d', time()); //convierte un timestamp en staring
echo "<br>";
echo "chequeo de fecha:     ", checkdate(30, 2, 2023) ? 'fecha buena buena' : 'fecha mala';
echo "<br>";
$fecha = strtotime("tomorrow", time());
echo "la fecha es:$fecha<br>";

/* en español
 */


setlocale(LC_TIME, 'es_ES', 'esp');

$fecha1 = strtotime('2-2-2023');
$fecha2 = strftime('%A %B %G', $fecha1);


echo " la fecha1 es:   $fecha1";

echo " <br> la fecha2 es:$fecha2<br>";

echo date('Y,m,d h:i:s', $fecha);
echo "<br>";
$f = strtotime("+10 hours");
echo date('M,Y,d  h:i:s', $f);

$instante = microtime();
echo "<br>estes es el microtime $instante<br>cccc";
$pos = strpos($instante, " ");
$milisegundos = substr($instante, 0, $pos);
$milisegundos = floor($milisegundos * 10);
$reloj = date("H:i:s:") . "con " . $milisegundos . " milisegundos";
echo "<h1>$reloj</h1>";
