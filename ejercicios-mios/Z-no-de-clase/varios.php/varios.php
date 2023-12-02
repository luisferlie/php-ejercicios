<?php
/* $valores = range(1, 10, 3);

print "<pre>\n";
print_r($valores);
print "</pre>\n";
$valores = range(0.5, 1.5, 0.4);

print "<pre>\n";
print_r($valores);
print "</pre>\n";
 */

$uno = [1, 2, 4];
$dos = [1, 3, 9];

$final = array_merge($uno, $dos);

print "<pre>\n";
print_r($final);
print "</pre>\n";

$uno = ["a" => 1, "b" => 2, "c" => 4];
$dos = ["b" => 10, "c" => 20, "d" => 40];

$final = array_merge($uno, $dos);
print "<pre>\n";
print_r($final);
print "</pre>\n";

$datos["pepe"]["edad"] = 25;
$datos["pepe"]["peso"] = 80;
$datos["juan"]["edad"] = 22;
$datos["juan"]["peso"] = 75;
$datos["ana"]["edad"]  = 30;

$elementos = count($datos);

print "<p>La matriz tiene $elementos elementos.</p>\n";
print "\n";
print "<pre>\n";
print_r($datos);
print "</pre>\n";
/*sort*/
$valores = [5 => "cinco", 1 => "uno", 9 => "nueve"];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n";
print_r($valores);
print "</pre>\n";
print "\n";

sort($valores);

print "<p>Matriz ordenada con sort():</p>\n";
print "\n";
print "<pre>\n";
print_r($valores);
print "</pre>\n";
print "\n";

/* sacar random value */

$cuadrados = [2 => 4, 3 => 9, 7 => 49, 10 => 100];

$indice = array_rand($cuadrados);

print "<pre>\n";
print_r($cuadrados);
print "</pre>\n";
print "\n";
print "<p>Índice al azar: $indice</p>\n";
print "\n";
print "<p>Valor al azar: $cuadrados[$indice]</p>\n";

$inicial = [0, 0, 1, 3, 1, 3, 2, 1];

$final = array_unique($inicial);
var_dump($inicial);

print "<pre>\n";
print_r($final);
print "</pre>\n";
