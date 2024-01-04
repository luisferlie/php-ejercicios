<?php


if(isset($_POST["reinicio"])){
  unset($accesos);
  unset($_POST);
  
  
}
$accesos = $accesos ?? null;
//Aquí genero el valor
if (isset($_POST['nombre'])) {

    $nombre = $_POST["nombre"];
    
//Lee el nombre y lleva un contador de clicks
//   Para ello deberías de tener un array asociativo por nombre
// leemos  de $POST los campos hidden (descartando submit y nombre) y generamos el array asociativo de de accesos con clave el nombre
// y valor el numero de clicks.Si la clave esta en la lista incrementamos el numero de clicks ,sino le asignamos valor inicial de 1.
    foreach ($_POST as $nom => $numclicks) {

        if ($nom !== 'submit' && $nom !== "nombre") {
            $accesos["$nom"] = (int) $numclicks;
        }
    }
    if (!isset($accesos[$nombre])) {
        
        $accesos["$nombre"] = 1;
    }else{
        $accesos["$nombre"]++;
    }
    
}



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
    <h1>CLICKS REALIZADOS POR LOS USUARIOS</h1>
    <?php 
    if($accesos)
    foreach ($accesos as $key => $clicks) {
        echo "<b>$key</b> ha realizado  <b>$clicks</b>  clics <br> ";
    }
    ?>
    <!--  <a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a> -->

    <form action="index2.php" method="post">
        <fieldset>

            <legend>Datos de click</legend>
            Nombre <input type="text" name="nombre" id=""><br />
            <?php
if ($accesos) {
    $html = '';
   
    foreach ($accesos as $nombre => $numclicks) {

        $html .= "<input type='hidden' name='" . $nombre . "' value='" . $numclicks . "'>";

    }
    echo $html;
}
?>
            <input type="submit" value="Haz click" name="submit">
            <input type="submit" value="reiniciar" name="reinicio">
        </fieldset>

    </form>

   
</body>

</html>