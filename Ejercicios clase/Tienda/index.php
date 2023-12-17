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
$html_productos = '';
include "funciones.php";

//Recibir el nombre del botón
$opcion = $_POST['submit'] ?? null;
//En funcióln del valor del botón
switch ($opcion) {
    case "Facturar":
        //Leer los input de cada producto
        //Generar una factura
        // Foramada por las líneas de factura
        //Cuidado que si tengo 200 y compro más, solo facturo 200
        // Por el total
        // Generar un informe del stock
        // Una línea por cada producto
        // Muestro lo que había menos lo que he comprado
        //
        list($factura, $inventario) = generar_factura($productos);

        // $factura = generar_factura($productos); */

        $inventario_html = generar_inventario($inventario);
        break;



    case "Ver productos":
        $html_productos = obtener_productos($productos);
        break;
    case "Ver precios":

    case "Tienda":
        //mostrar un formulario con una caja de texto para cada producto
        //que me muestre el producto el precio y las unidades
        //también una caja de texto para comprar
        //un botón submit de comprar
        $formulario_comprar = obtener_formulario_productos($productos);

    default:
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>

        <form action="index.php" method="post">
            <h2>Pedir mostrará todos los productos de menos de 2100 unidades</h2>
            <input type="submit" value="Ver productos" name="submit">
            <input type="submit" value="Ver precios" name="submit">
            <input type="submit" value="Ver Stock" name="submit">
            <input type="submit" value="Pedir" name="submit">
            <input type="submit" value="Tienda" name="submit">
        </form>
        <h2><?= $html_productos ?></h2>
        <h2><?= $factura ?? "" ?></h2>
        <h2><?= $inventario_html ?? "" ?></h2>
        <h2><?= $formulario_comprar ?? "" ?></h2>
</body>

</html>