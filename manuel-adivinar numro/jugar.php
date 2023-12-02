<?php

//obtengo la opción que me ha traído a esta págian
$opcion = $_POST['submit'] ?? null;
switch ($opcion) {

    case "Empezar": //Identifico e inicializo las varilbles
    case "Reiniciar":
        $min = 1;
        $intentos = $_POST['intentos'];
        $max = pow(2, $intentos);
        $jugada = 1;
        break;
    case "Jugar": //Hacemos la jugada actual (
        //leer los datos que son los valores de la jugada anterior o de inicializar las variables
        $jugada = $_POST['jugada'];
        $jugada++; //actualizo la jugada
        $min = $_POST['min'];
        $max = $_POST['max'];
        $num = $_POST['numero'];
        $intentos = $_POST['intentos'];
        $rtdo = $_POST['rtdo'];
        //Evalúo la jugada si ya he terminado me voy a fin
        if ($jugada > $intentos && $rtdo != "=") {
            $resultado = false;
            header("Location:fin.php?acertado=$resultado");
            exit();
        }
        switch ($rtdo) {
            case ">":
                $min = $num;
                break;
            case "<":
                $max = $num;
                break;
            case "=":
                $resultado = true;
                header("Location:fin.php?acertado=$resultado");
                exit();
        }
        break;
    case "Volver":
        $intentos = $_POST['intentos'];
        header("Location:index.php?intentos=$intentos");
        exit();
    default:
        header("Location:index.php");
        exit();
}

$numero = round(($min + $max) / 2);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <fieldset>
        <legend>Opciones del juego</legend>
        <form action="jugar.php" method="post">
            <h1>En número es <?= $numero ?></h1>
            <h2>Juagada actual <?= $jugada ?></h2>

            <input type="radio" checked name="rtdo" value=">" id="">Mayor<br />
            <input type="radio" name="rtdo" value="<" id="">Menor<br />
            <input type="radio" name="rtdo" value="=" id="">Igual<br />
            <input type="submit" value="Jugar" name="submit">
            <input type="submit" value="Reiniciar" name="submit">
            <input type="submit" value="Volver" name="submit">
            <input type="hidden" name="max" value="<?= $max ?>">
            <input type="hidden" name="min" value="<?= $min ?>">
            <input type="hidden" name="numero" value="<?= $numero ?>">
            <input type="hidden" name="intentos" value="<?= $intentos ?>">
            <input type="hidden" name="jugada" value="<?= $jugada ?>">
        </form>
    </fieldset>

</body>

</html>