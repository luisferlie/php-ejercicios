<?php

function recoge($key, $type = "")
{
    if (!is_string($key) && !is_int($key) || $key == "") {
        trigger_error("Function recoge(): Argument #1 (\$key) must be a non-empty string or an integer", E_USER_ERROR);
    } elseif ($type !== "" && $type !== []) {
        trigger_error("Function recoge(): Argument #2 (\$type) is optional, but if provided, it must be an empty array or an empty string", E_USER_ERROR);
    }
    $tmp = $type;
    if (isset($_GET[$key])) {
        if (!is_array($_GET[$key]) && !is_array($type)) {
            $tmp = trim(htmlspecialchars($_GET[$key]));
        } elseif (is_array($_GET[$key]) && is_array($type)) {
            $tmp = $_GET[$key];
            array_walk_recursive($tmp, function (&$value) {
                $value = trim(htmlspecialchars($value));
            });
        }
    }
    return $tmp;
}

if (isset($_GET["nombre"])) {

    var_dump($_GET['nombre']);
    $nombre = $_GET["nombre"];
    var_dump($nombre);

    $apellido = $_GET["apellido"];
    $edad = $_GET["edad"];
}

if (!isset($_GET["nombre"])) {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="funciones.php">
            Nombre: <input type="text" name="nombre"><br><br>
            Apellido: <input type="text" name="apellido"><br><br>
            Edad: <input type="text" name="edad"><br><br>

            <input type="submit" value="enviar" name="enviar">
        </form>


    </body>

    </html>

<?php } else { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>estos son tus datos</h1>

        <p>Nombre: <?php $nombre ?></p>
        <p>Apellido:<?php $apellido ?></p>
        <p>Edad:<?php $edad ?></p>


        </form>


    </body>

    </html>
<?php } ?>