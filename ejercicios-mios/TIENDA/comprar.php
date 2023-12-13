<?php
$productos = [
    'lechuga' => [
        'unidades' => 200,
        'precio' => 0.90
    ],
    'tomates' => [
        'unidades' => 2000,
        'precio' => 2.15
    ],
    'cebollas' => [
        'unidades' => 3200,
        'precio' => 0.49
    ],
    'fresas' => [
        'unidades' => 4800,
        'precio' => 4.50
    ],
    'manzanas' => [
        'unidades' => 2500,
        'precio' => 2.10
    ],
];

if (isset($_POST["comprar"])) {
    /*  $compra = []; */
    $lechugas = $_POST["lechuga"] > $productos['lechuga']['unidades'] ? $productos['lechuga']['unidades'] : $_POST["lechuga"];
    $tomates = $_POST["tomates"] > $productos['tomates']['unidades'] ? $productos['tomates']['unidades'] : $_POST["tomates"];
    $cebollas = $_POST["cebollas"] > $productos['cebollas']['unidades'] ? $productos['cebollas']['unidades'] : $_POST["cebollas"];
    $fresas = $_POST["fresas"] > $productos['fresas']['unidades'] ? $productos['fresas']['unidades'] : $_POST["fresas"];
    $manzanas = $_POST["manzanas"] > $productos['manzanas']['unidades'] ? $productos['manzanas']['unidades'] : $_POST["manzanas"];

    foreach ($productos as $producto => $udprecio) {
        var_dump($producto);
        var_dump($_POST[$producto]);
        $compra["lechuga"] = $lechugas;
        $compra["tomates"] = $tomates;
        $compra["cebollas"] = $cebollas;
        $compra["fresas"] = $fresas;
        $compra["manzanas"] = $manzanas;
    }
    var_dump($compra);
}


$html = "Introduzca las unidades que desa comprar:<br>";
$html .= "<form action='comprar.php' method='post' style=''>";

foreach ($productos as $producto => $udprecio) {
    $html .= "Hay {$udprecio['unidades']} uds  de  $producto";
    $html .=  "<input type='text' value='' name='$producto'>";
}

$html .= "<hr style='width:60%' ;>";
$html .= "<input type='submit' value='comprar' name='comprar'>";

$html .= "<form>";

$facturaEncabezado = "<h2>esta es su factura de compra,sr x</h2>";
$factura = "Usted a comprado";
$factura .= "<table>";
foreach ($compra as $key => $value) {
    $factura .= "<tr><td>$key</td><td>$value</td></tr>";
}
$factura .= "</table>";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <p><?= $html ?> </p>
    <hr>
    <?= $facturaEncabezado ?>
    <hr>
    <?= $factura ?>

</head>

<body>

    <P></P>
</body>

</html>