<?php
$intentos = $_GET['intentos'] ?? 10;
//Si vengo de jugar leo los intentos por get, si no doy un valor por defecto 10

//Estas variables contendrán el texto para incluir den los input de tipo radio
//Uno de ellos será checked el resto null
$checked_10 = null;
$checked_16 = null;
$checked_20 = null;
//en funcion de get['intentos] identifico el radio button que se quedará marcado
switch ($intentos) {
    case 10:
        $checked_10 = "checked";
        break;
    case 16:
        $checked_16 = "checked";
        break;
    case 20:
        $checked_20 = "checked";
        break;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Juego de adivinar un número</h1>
    <fieldset>
        <legend>Selecciona un intervalo</legend>
        <form action="jugar.php" method="POST">
            <input type="radio" name="intentos" <?= $checked_10 ?> value="10" id="">10 intentos valores
            entre(1-1024)<br />
            <input type="radio" name="intentos" <?= $checked_16 ?> value="16" id="">16 intentos valores
            entre(1-65536)<br />
            <input type="radio" name="intentos" <?= $checked_20 ?> value="20" id="">20 intentos valores
            entre(1-1048576)<br />
            <input type="submit" value="Empezar" name="submit">
    </fieldset>
    </form>
</body>

</html>