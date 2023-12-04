<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV="Refresh"
        CONTENT="2; URL=D:\cpi-ejercicios\php-MIS EJERCICIOS\ejercicios-mios\Z-no-de-clase\varios.php\varios1.php">
    <title>Document</title>
</head>

<body>
    esto no pinta nada
</body>

</html> -->

<?php
/* function prueba() */
/* {
    global $a;

    // Modificamos la variable $a en la función
    $a = 50;
}

$a = 100;
prueba();
echo "<p>La variable a es $a.</p>\n";
function saludo($nombre, $veces)
{
    for ($i = 0; $i < $veces; $i++) {
        print "<p>Hola, $nombre!</p>\n";
        print "\n";
    }
}

saludo("Don Pepito", 3);
saludo(1, 1, 3); */

// Definición de la función prueba()
/* function test($x)
{
    print "<p>La variable es $x.</p>\n";
    print "\n";
}

// Damos un valor a las variables
$a = 100;
$b = 50;
print "<p>La variable a es $a y la variable b es $b.</p>\n";
print "\n";
// Llamamos a la función
test($a);
test($b);
// Volvemos a escribir las variables
print "<p>La variable a es $a y la variable b es $b.</p>\n";


// ESTA ES LA DEFINICIÓN DE LA FUNCIÓN calculaMedia
function calculaMedia($arg1, $arg2, $arg3 = "aritmética")
{
    if ($arg3 == "aritmética") {
        $media = ($arg1 + $arg2) / 2;
    } elseif ($arg3 == "geométrica") {
        $media = sqrt($arg1 * $arg2) / 2;
    } elseif ($arg3 == "armónica") {
        $media = 2 * ($arg1 * $arg2) / ($arg1 + $arg2);
    }
    return $media;
}

// ESTO SON EJEMPLOS DE USO DE LA FUNCIÓN calculaMedia
$dato1 = 128975649756;
$dato2 = 16345384935;

// EL TERCER ARGUMENTO INDICA EL TIPO DE MEDIA A CALCULAR
$media = number_format(calculaMedia($dato1, $dato2, "geométrica"), 2, ",", ".");
print "<p>La media geométrica de $dato1 y $dato2 es $media.</p>\n";
print "\n";

// AL NO PONER EL TERCER ARGUMENTO, DEVUELVE LA MEDIA ARITMÉTICA
$media = calculaMedia($dato1, $dato2);
print "<p>La media aritmética de $dato1 y $dato2 es $media.</p>\n"; */
$to = "luisferlie@gmail.com";
$subject = "prueba";
$body = "Línea 1\r\nLínea 2\r\nLínea 3";
/* $body = str_replace("\n.", "\n..", $body); */
echo "Tu email ha sido enviado de forma exitosa a $to!";
mail("luisferlie@gmail.com", "prueba", "Línea 1\r\nLínea 2\r\nLínea 3");
/* header('location:sesiones.php');
exit(); */


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="sesiones.php">vuelve a sesiones.php</a>
</body>

</html>