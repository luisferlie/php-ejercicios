<?php
$acertado = $_GET['acertado'];
if ($acertado)
    $msj = "Ves que listo soy";
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
    <h1><?= $msj ?></h1>
    <form action="index.php" method="post">

        <input type="submit" value="Volver" name="submit">

    </form>
</body>

</html>