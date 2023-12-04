<html lang="es">

<head>
    <meta charset="utf-8">
    <title>
        Convertidor de distancias (1) Con funciones (Resultado).
        Funciones (1). Funciones.
        Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
    <h1>Convertidor de distancias (1) Con funciones (Resultado)</h1>

    <?php
    // Función de recogida de datos
    function recoge($key, $type = "")
    {
        if (!is_string($key) && !is_int($key) || $key == "") {
            trigger_error("Function recoge(): Argument #1 (\$key) must be a non-empty string or an integer", E_USER_ERROR);
        } elseif ($type !== "" && $type !== []) {
            trigger_error("Function recoge(): Argument #2 (\$type) is optional, but if provided, it must be an empty array or an empty string", E_USER_ERROR);
        }
        $tmp = $type;
        if (isset($_REQUEST[$key])) {
            if (!is_array($_REQUEST[$key]) && !is_array($type)) {
                $tmp = trim(htmlspecialchars($_REQUEST[$key]));
            } elseif (is_array($_REQUEST[$key]) && is_array($type)) {
                $tmp = $_REQUEST[$key];
                array_walk_recursive($tmp, function (&$value) {
                    $value = trim(htmlspecialchars($value));
                });
            }
        }
        return $tmp;
    }

    function convierte($num, $uniOri, $uniFin)
    {
        // La unidad intermedia es el metro
        $numeroIntermedio = 0;
        if ($uniOri == "km") {
            $numeroIntermedio = $num * 1000;
        } elseif ($uniOri == "m") {
            $numeroIntermedio = $num;
        } elseif ($uniOri == "cm") {
            $numeroIntermedio = $num / 100;
        }

        if ($uniFin == "km") {
            $numeroFinal = $numeroIntermedio / 1000;
        } elseif ($uniFin == "m") {
            $numeroFinal = $numeroIntermedio;
        } elseif ($uniFin == "cm") {
            $numeroFinal = $numeroIntermedio * 100;
        }
        return $numeroFinal;
    }

    $unidades = ["km", "m", "cm"];

    $numero  = recoge("numero");
    $inicial = recoge("inicial");
    $final   = recoge("final");

    $numeroOk  = false;
    $inicialOk = false;
    $finalOk   = false;

    if ($numero == "") {
        print "  <p class=\"aviso\">No ha escrito nada.</p>\n";
        print "\n";
    } elseif (!is_numeric($numero)) {
        print "  <p class=\"aviso\">No ha escrito un número.</p>\n";
        print "\n";
    } else {
        $numeroOk = true;
    }

    if (!in_array($inicial, $unidades)) {
        print "  <p class=\"aviso\">No ha elegido una unidad inicial válida.</p>\n";
        print "\n";
    } else {
        $inicialOk = true;
    }

    if (!in_array($final, $unidades)) {
        print "  <p class=\"aviso\">No ha elegido una unidad final válida.</p>\n";
        print "\n";
    } else {
        $finalOk = true;
    }

    if ($numeroOk && $inicialOk && $finalOk) {
        $resultado = convierte($numero, $inicial, $final);
        print "  <p>$numero $inicial = $resultado $final.</p>\n";
        print "\n";
    }
    ?>
    <p><a href="funciones-1-1-fu-1.php">Volver al formulario.</a></p>

    <footer>
        <p class="ultmod">
            Última modificación de esta página:
            <time datetime="2018-12-09">9 de diciembre de 2018</time>
        </p>

        <p class="licencia">
            Este programa forma parte del curso <strong><a href="https://www.mclibre.org/consultar/php/">Programación
                    web en PHP</a></strong> de <a href="https://www.mclibre.org/" rel="author">Bartolomé Sintes
                Marco</a>.<br>
            El programa PHP que genera esta página se distribuye bajo
            <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
        </p>
    </footer>
</body>

</html>