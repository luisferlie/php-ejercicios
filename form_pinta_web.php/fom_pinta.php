<?php

if (isset($_POST['enviar'])) {
    $alturaCabecera = $_POST['HCabecera'];
    $alturaMenu = $_POST['HMenu'];
    $anchuraMenu = $_POST['AMenu'];
    $anchuraContenido = $_POST['AContenido'];

    $colorCabecera = $_POST['CCabecera'];
    $colorContenido = $_POST['CContenido'];
    $colorMenu = $_POST['CMenu'];

    $anchuraContenido = $_POST['AContenido'];
    $anchuraContenido = $_POST['AContenido'];

    $tamañoTitulo = $_POST['TTitulo'];
    $textoTitulo = $_POST['TextTitulo'];
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<header style="background-color: <?= $colorCabecera ?> ;height:   <?= $alturaCabecera ?>px ">

    <h2 style="font-size:   <?= $tamañoTitulo ?>"> <?= $textoTitulo = $_POST['TextTitulo']; ?></h2>
</header>
<div class="container" style="display:flex">
    <div class="menu" style="background-color:<?= $colorMenu ?>;width:<?= $anchuraMenu ?>;height:<?= $alturaMenu ?>">

    </div>
    <main
        style="background-color:<?= $colorContenido ?> ; <?= $colorContenido ?>;width: <?= $anchuraContenido; ?> ;height:<?= $alturaMenu ?>">

    </main>
</div>

<body>

</body>

</html>