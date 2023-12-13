<?php
$productos = [
    'lechuga' => ['unidades' => 200,
        'precio' => 0.90],
    'tomates' => ['unidades' => 2000,
        'precio' => 2.15],
    'cebollas' => ['unidades' => 3200,
        'precio' => 0.49],
    'fresas' => ['unidades' => 4800,
        'precio' => 4.50],
    'manzanas' => ['unidades' => 2500,
        'precio' => 2.10],
];
$html='';

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
    switch ($accion) {
        case 'verProductos':
            foreach($productos as $producto =>$udprecio){
                $html.= "$producto  a un precio de  {$udprecio['precio']} <br>";
            }
            break;
        case 'verPrecios':
            foreach($productos as $producto =>$udprecio){
                $html.=" $producto tenemos {$udprecio['unidades']} a un precio de  {$udprecio['precio']}<br>";
            }
            break;
        case 'verStock':
           foreach($productos as $producto =>$udprecio){
                $html.= "De $producto tenemos {$udprecio['unidades']} uds<br>" ;
            }
            break;
        case 'pedir':
            foreach($productos as $producto =>$udprecio){
               $html.= "$producto tenemos {$udprecio['unidades']} a un precio de  {$udprecio['precio']}<br>";
            }
            break;
        case 'comprar':
            header('location:comprar.php');
            break;

    }
}
?>

<!-- ejercicio que saca listado de productos con input para poner lasunidades a comprar y(en fichero aparate y que
genera y muestra una factura  con los datos  -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="tienda_verduras.php" method="post">
    <h2>Pedir mostrará todos los productos de menos de 2100 unidades</h2>

    <input type="submit" value="verProductos" name="accion">
    <input type="submit" value="verPrecios" name="accion">
    <input type="submit" value="verStock" name="accion">
    <input type="submit" value="pedir" name="accion">
    <input type="submit" value="comprar" name="accion">
</form>
<p><?=$html ?>
</p>
</body>
</html>