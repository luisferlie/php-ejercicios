<?php
ini_set("session.save_handler", "files");
session_name("prueba");
session_start();


$nombre = 'Pepito';
$email = 'pepe@goo.com';
$pass = 33;
$pepe = [$nombre, $email, $pass];
$_SESSION["pepe"] = $pepe;

echo "<p>El nombre es $pepe[0]</p>";
var_dump($_SESSION["pepe"][0]);
echo "<p>El nombre es" . $_SESSION['pepe'][0] . " y su contarseña es" . $_SESSION["pepe"][2] . "su correo es:" . $_SESSION["pepe"][1] . " </p>";
unset($_SESSION);
echo "el session_id es :", session_id();
session_unset();

session_destroy();
/* phpinfo(); */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="funciones.php">vete a otra funciones.php</a>
</body>

</html>