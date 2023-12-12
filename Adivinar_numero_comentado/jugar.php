<?php

//obtengo la opción que me ha traído a esta página
$opcion = $_POST['submit'] ?? null;
switch ($opcion) {

    case "Empezar": /*Identifico e inicializo las variables,reinicializamos las variables a comienzo del juego los valores minimos(1) y maximos posibles( pow(2, $intentos)),jugada a 1,e $intento enviado por post desde el index.php*/
    case "Reiniciar":
        $min = 1;
        $intentos = $_POST['intentos'];
        $max = pow(2, $intentos);
        $jugada = 1;
        break;
    case "Jugar": //Hacemos la jugada actual (
        //leemos los datos que  nos llegan del formulario con los  valores de la jugada(jugada,intentos,max,min,numero(promedio de ambos))y en funcion del rtdo (mayor,menor,igual) indicado por el usuario,se generan los nuevos max,min
        $jugada = $_POST['jugada'];
        $jugada++; //actualizo la jugada
        $min = $_POST['min'];
        $max = $_POST['max'];
        $num = $_POST['numero'];
        $intentos = $_POST['intentos'];
        $rtdo = $_POST['rtdo'];
        //Evalúo la jugada si se ha  superado el numero de intentos y el resultado indicado no es (=) se reenvia a fin de juego por get con el valor de $resultado igual a false .
        if ($jugada > $intentos && $rtdo != "=") {
            $resultado = false;
            header("Location:fin.php?acertado=$resultado");
            exit();
        }
        switch ($rtdo) {

                /*en función del valor indicado por el usuario se redefinen el rango con los valores de máximo y minimo ,siendo el minimo igual al numero generado si este ha indicado que es mayor (>) o el maximo igual al número generado si le ha indicado que es menor(<).En caso de indicar que es igual  (=) se redirecciona para fin de juego con resultado exitoso($resultado=true por get)*/

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

                /* en caso de que el resultado sea igual(=) redireccionamos a la pagina fin de juego con el valor de $acertado=true para que esta
                indique mensaje de acierto,con la opcion de volver a jugar con un boton que redirecciona al inicio(index.php).*/
        }
        break;
    case "Volver":
        $intentos = $_POST['intentos'];
        header("Location:index.php?intentos=$intentos");
        exit();
    default:
        //en caso de no tener ninguno de los valores previos(intentar acceder directamente.a jugar.php...)redireccionamos al index
        header("Location:index.php");
        exit();
}

$numero = round(($min + $max) / 2);
/*se genera el nuevo numero por la máquina a usar en  siguiente jugada que se activa al darle a la opcion de jugar que remite el formulario con los nuevos valores de la nueva jugada...ver abajo en el formulario que se remite a esta misma pagina*/


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

            <!--Si se pulsa al boton submit de jugar en este formulario se reenvian a la pagina de jugar los nuevos valores de maximo,minimo ,el valor actualizado de jugadas(una mas),intentos,asi como el nuevo numero que ha generado la máquina (todos ellos a traves un input:hidden)
                los intentos que dispone,asi como el resultado (donde indica el usuario si es mayor menor o igual) 
            Es como un ciclo de un bucle que se activa al hacer submit en jugar pasando los nuevos valores.

            Tambien estan la opcion(submit) de reiniciar que(en el switch) reinicializa la variables(jugada 1,max=valor maximo del rango elegido,min=1)igual que cuando pulsamos en empezar en el index.php

            Y la opcion(submit) de volver que nos lleva al index para volver a empezar seleccionando el rango de numeros y por tanto de intentos
            -->

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