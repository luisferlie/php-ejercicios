<?php


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

if (isset($_REQUEST["enviar"])) {
    $nombre = recoge('nombre');
    $nombre = trim(htmlspecialchars(strip_tags($nombre)));
    $edad = recoge('edad');
    $apellidos = recoge("apellidos", []);
    echo $nombre;
    echo '<br>';
    echo $edad;
    echo '<br>';
    echo $apellidos[2];
    echo '<br>';
    echo $apellidos[1];
    var_dump($apellidos);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <p>Nombre:</p><input type="text" name="nombre" id="">
        <p>Primer apellido: <input type="text" name="apellidos[1]"></p>
        <p>Segundo apellido: <input type="text" name="apellidos[2]"></p>
        <p>Edad:<input type="text" name="edad" id=""></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>

</html>