<?php
$acertado = $_GET['acertado'] ?? null;
if ($acertado)
    $msj = "Ves que  soy una maquina muy lista";
else
    $msj = "No puede ser, no has sido sincero";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!--   se acaba el juego con resultado de(true/false) $acertado pasado por get (en caso de haber acertado o haber superado el numero de intentos) o de "no has sido sincero" ya que en el numero de intentos previsto necesariamente se ha de acertar el numero -->
    <h1><?= $msj ?></h1>
    <form action="index.php" method="post">

        <input type="submit" value="Volver" name="submit">

    </form>
</body>

</html>