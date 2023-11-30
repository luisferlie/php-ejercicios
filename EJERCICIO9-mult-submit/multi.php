<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Aplico el operador de resolución de nulos
$opcion = $_POST['submit'] ?? null;

//según la opción, genero un mensaje u otro
switch ($opcion) {
    case "Acceder":
        $msj = "Vamos a Acceder a la base de datos";
        break;
    case "Insertar":
        $msj = "Vamos a Insertar un registro";
        break;
    case "Borrar":
        $msj = "Se borrará el registro seleccionado";
        break;
    case "Buscar":
        $msj = "Realizarmos una búsquea";
        break;
    case "Actualizar":
        $msj = "Vamos a Actualizar el registro";
        break;
    case "Salir":
        $msj = "Salimos y cerramos la base datos";
        break;
    default:
        $msj = "Selecciona una opción";
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Esta es una página de opciones con ruteo</h1>

    <!--Aquí muestro el mensaje previamente generado-->
    <h1><?= $msj ?></h1>
    <?php
    $opcion = $_POST['submit'] ?? null;
    ?>

    <form action="multi.php" method="POST">
        <fieldset>
            <legend>Opciones Form 1</legend>
            <input type="submit" value="Acceder" name="submit">
            <input type="submit" value="Insertar" name="submit">
            <input type="submit" value="Borrar" name="submit">
            <input type="submit" value="Buscar" name="submit">
            <input type="submit" value="Actualizar" name="submit">
            <input type="submit" value="Salir" name="submit">
        </fieldset>
    </form>

</body>

</html>