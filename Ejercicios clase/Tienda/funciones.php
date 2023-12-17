<?php

function obtener_productos(array $productos): string
{

    $lista = "<ol>";
    foreach ($productos as $producto => $contenido) {
        $lista .= "<li>$producto</li>";
    }
    $lista .= "</ol>";
    return $lista;
}
function obtener_formulario_productos($productos)
{
    $html_formulario = "<form action ='index.php' method=post>";
    foreach ($productos as $producto => $contenido) {
        $html_formulario .= <<<FIN
        $producto a {$contenido['precio']} € ({$contenido['unidades']}) unidades
        <input type="text" name="$producto" /><br />
        FIN;
    }

    $html_formulario .= "<input type='submit' value='Facturar' name='submit'>";
    $html_formulario .= "</form>";
    return $html_formulario;
}
function generar_factura($productos)
{
    $html_factura = "<h1>Listado de sus compras</h1>";
    $inventario = [];
    foreach ($productos as $producto => $udprecio) {
        //obtengo unidades pedidas considerando el stock disponible
        $udped = $_POST[$producto] > $udprecio['unidades'] ? $udprecio['unidades'] : $_POST[$producto];
        $inventario[$producto] = (int)$productos[$producto]['unidades'] - (int)$udped;
        echo "$udped de $producto";
        //corrijo inventario
        $productos[$producto]['unidades'] -= (int)$udped;
        $html_factura .= "Ha comprado: $udped de $producto  y aun quedan {$productos[$producto]['unidades']}  en stock <br/>";
    }
    var_dump($inventario);
    return [$html_factura, $inventario];
}
function generar_inventario($inventario)
{
    $inventario_html = '<h2>El inventario de productos es</h2>';
    foreach ($inventario as $producto => $stock) {
        $inventario_html .= "hay $stock unidades del producto $producto <br>";
    }
    return $inventario_html;
}
