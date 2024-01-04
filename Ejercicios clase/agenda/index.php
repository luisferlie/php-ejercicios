<?php
include "functions.php";
$html_error = '';
$error = [];
$agenda = [];
//'luis' => 6778989876, "pepe" => 662345676, "eva" => 633345678
// RF1  Si he apretado submit

if (isset($_POST['borrar_agenda'])) {
    $agenda = [];
}

if (isset($_POST["guardar"])) {
    $error = [];
    $nombre = filter_input(INPUT_POST, $_POST['nombre'], FILTER_SANITIZE_STRING); // Nombre del contacto
    $telefono = filter_input(INPUT_POST, $_POST['telefono'], FILTER_VALIDATE_INT); // Nombre del contacto
    if (empty($agenda["$nombre"])) {

        $error[0] = "el nombre no debe estar vacio";
    }
    if (!$telefono) {
        $error[1] = "el tf no debe estar vacio y solo puede contener numeros";
    }
    if (!$telefono && !empty($agenda["nombre"])) {
        $agenda["$nombre"] = "";
    }
    if ($telefono && $nombre) {
        $agenda[$nombre] = $telefono;
    }
    if ($nombre && empty($telefono)) {
        unset($agenda[$nombre]);
    }
}

// RF2 Leer valores del formulario (nombre, tel, agenda)
$nombre = filter_input(INPUT_POST, "nombre", FILTER_SANITIZE_STRING);
//...

//RF3 Vamos a establecer una variable de error

/*Identica los posibles errores a considerar:
   1.- El nombre está vacío
   2.- El teléfono no es numérico
   3.-
*/

//Creamos las funciones necesarias para
//Obtener el error
/* $error = valida_nombre($nombre); */
//...

/*
RF 4, el kernel del ejercicio:
 Ahora ya tenemos los datos del usuario RF1 y posible error RF 2
 Actuamos en consecuencia:

//Si hay error, informamos de ello
//Si no  hay error realizamos la acción selecciona (add o borrar)
*/
if ($error) {
} else {
    //Realizamos la acción seleccionada (borrar, actualizar )
    //Generamos un mensaje , ya que la acción añadir puede ser una modificación del teléfono
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <form action="index.php" method="POST" class="p-5">
        <?php
        foreach ($agenda as $nombre => $tel) {
            echo "$nombre : <input type='text' name='agenda[$nombre]' value ='$tel'><br>";
        } ?>
        <input type="text" name="nombre" id="" placeholder="nombre">
        <input type="text" name="telefono" id="" placeholder="tf">
        <input type="submit" value="guardar" name="guardar">
        <br>
        <?php
        if (count($agenda) > 0) : ?>
        <input type="reset" value="borrar contactos" name="borrar_agenda">
        <?php endif ?>

    </form>
    <?php
    $html_error = '';

    foreach ($error as $value) {
        $html_error .= " $value<br>";
    }
    ?>
    <p class="text-danger"><?= $html_error ?></p>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>