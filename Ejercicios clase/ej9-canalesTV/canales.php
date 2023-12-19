<?php
$url =  "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
$contenido = file_get_contents($url);
function obtener_arrays_canales()
{
    $url = "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
    $contenido = file_get_contents($url);
    $contenido = json_decode($contenido, 1);
    return $contenido;
}
$canales = obtener_arrays_canales();
$num_tematicas = count($canales);
var_dump($num_tematicas);

$tipo_canales = '';
$canales_html = '';

$i = 0;
do {

    $canales_html .= "<h1>{$canales[$i]['name']}</h1>";
    foreach ($canales[$i]['channels'] as $valor) {
        $canales_html .= " {$valor['name']} <br><a href='{$valor['web']}'><img src='{$valor["logo"]}' width='50' ></a><br> ";
    }
    $i++;
} while ($i < 24)



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de tipos de canales por tematica </h1><br>
    <p><?= $canales_html ?></p>
    <hr>

    <p></p>

</body>

</html>