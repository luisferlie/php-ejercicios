<?php
if (isset($_GET["enviar"])) {

    $primer = $_GET["n1"];
    $segundo = $_GET["n2"];
    $tercer = $_GET["n3"];
    $cuarto = $_GET["n4"];
    $bin = $primer . $segundo . $tercer . $cuarto;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input {
        font-size: 2rem;
        padding: .5rem;
        width: 1rem;
    }
    </style>
</head>

<body>
    <div style="display:flex">
        <form action="">
            <input type="text" name="n1" id="" min="0" max="1" value="<?= $primer ?? null ?>">
            <input type="text" name="n2" id="" min="0" max="1" value="<?= $segundo ?? null ?>">
            <input type="text" name="n3" id="" min="0" max="1" value="<?= $tercer ?? null ?>">
            <input type="text" name="n4" id="" min="0" max="1" value="<?= $cuarto ?? null ?>">
            <button type="submit" style="padding:0,10px" name=enviar>Enviar</button>
        </form>
        <p><?= "el binario introducido es" . $bin  ?></p>


    </div>
    <p>el numero decial que corresponde es :<?= bindec($bin) ?> </p>
</body>

</html>