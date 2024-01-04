<?php

$accesos=$accesos??null;
//Aquí genero el valor
if (isset($_POST['nombre'])) {

    $nombre = $_POST["nombre"];
    $accesos["$nombre"] =0;
    $accesos["$nombre"] += 1;
    var_dump($accesos);
    var_dump($_POST);

    foreach ($_POST as $nombre => $numclicks) {
        $variable=$nombre !=='submit'||$nombre!=='nombre';
        var_dump($variable);
        if($nombre !=='submit'||$nombre!=='nombre'){
        $accesos["$nombre"] = (int)$numclicks+1;}
    }
    var_dump($accesos);
}
var_dump($accesos);

//Lee el nombre y lleva un contador de clicks
//   Para ello deberías de tener un array asociativo por nombre

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
</head>

<body>

    <!--  <a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a> -->

    <form action="index.php" method="post">
        <fieldset>

            <legend>Datos de click</legend>
            Nombre <input type="text" name="nombre" id=""><br />
            <?php
if ($accesos) {
    foreach ($accesos as $nombre => $numclicks) {
        echo "<input type='hidden' name='" . $nombre . "' value='" . $numclicks . "'";
    }
}
?>
        </fieldset>
        <input type="submit" value="Haz click" name="submit">
    </form>

    <h1>LE HAS DADO
        <? ?> veces
    </h1>
</body>

</html>