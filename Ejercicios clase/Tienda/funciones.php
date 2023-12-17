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

    foreach ($productos as $producto => $udprecio) {
        //obtengo unidades pedidas considerando el stock disponible
        $udped = $_POST[$producto] > $udprecio['unidades'] ? $udprecio['unidades'] : $_POST[$producto];
        echo "$udped de $producto";
        //corrijo inventario
        $productos[$producto]['unidades'] -= (int)$udped;
        $html_factura .= "Ha comprado: $udped de $producto  y aun quedan {$productos[$producto]['unidades']}  en stock <br/>";
    }
    return $html_factura;
}
function generar_inventario($productos)
{
}
