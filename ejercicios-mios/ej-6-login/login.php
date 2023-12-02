<?php
if (isset($_GET["enviar"]) && ($_GET["nombre"] == $_GET["password"])) {
    $nombre = $_GET["nombre"];
    $pass = $_GET['password'];
    echo "$nombre,$pass";
?>
<h2>hola querido <?= $nombre ?></h2>

<?php } else { ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <p>Nombre:</p>
        <p>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
        </p>
        <p>contraseña:</p>
        <p>
            <input type="password" name="password" id="">
        </p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>

</html>


<?php } ?>