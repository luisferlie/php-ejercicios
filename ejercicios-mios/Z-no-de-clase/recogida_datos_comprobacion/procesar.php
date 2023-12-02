<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>
        Ejemplo de recogida de datos sin comprobación (Resultado).
        Recogida de datos. Ejemplos.
        Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
    <h1>Ejemplo de recogida de datos sin comprobación (Resultado)</h1>
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

    $nombre = recoge("nombre");
    $edad   = recoge("edad");

    print "  <p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
    print "  <p>Su edad es <strong>$edad</strong> años.</p>\n";
    print "\n";
    ?>