<!DOCTYPE html>
<html>

<head>
    <title>Juego del número secreto</title>
</head>

<body>

    <?php

    if (!isset($_GET['numero'])) {

        if (!isset($_GET['aleatorio'])) {
            $intentos = 0;
            $aleatorio = rand(1, 100);
        } else {
            $aleatorio = $_GET['aleatorio'];
            $intentos = $_GET['intentos'];
        }
        echo "<form action='index.php' method='get'>
				Adivina mi número:
				<input type='text' name='numero'><br>
				<input type='hidden' name='aleatorio' value='$aleatorio'>
				<input type='hidden' name='intentos' value='$intentos'>
				<br>				
				<input type='submit'>
				</form>";
    } else {

        $n = $_GET['numero'];
        $aleatorio = $_GET['aleatorio'];
        $intentos = $_GET['intentos'];
        $intentos++;
        echo "Tu número es: $n<br>  llevas $intentos intentos <br>";
        if ($n > $aleatorio) {
            echo "Mi número es MENOR<br>";
        } else if ($n < $aleatorio) {
            echo "Mi número es MAYOR<br>";
        } else {
            echo "<p>ENHORABUENA, HAS ACERTADO</p>";
            echo "Has necesitado $intentos intentos";
        }

        echo "<br>";
        echo "<br><a href='index.php?aleatorio=$aleatorio&intentos=$intentos'><button>Sigue jugando...</button></a><br>";
        echo "<br><a href='index.php?'aleatorio=null&intentos=0><button>Volver a empezar..</button>.</a>";
    }

    ?>