<?php


?>
<form action="">
    espanol <input type="radio" name="idioma" id="idoma" value="espanol">
    francais<input type="radio" name="idioma" id="idoma" value="francais">
    english<input type="radio" name="idioma" id="idoma" value="english">
    <input type="submit" value="selecionar" name="idiomaSeleccion">

</form>
<?php if (isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];
    switch ($idioma) {
        case 'espanol': { ?>
<form action="">
    nombre: <input type="text" name="nombre"><br><br>
</form>
<?php  }
            break;
        case 'francais': { ?>
<form action="">
    nom: <input type="text" name="nombre"><br><br>
</form>
<?php  }
            break;
        case 'english': { ?>
<form action="">
    NAME: <input type="text" name="nombre"><br><br>
</form>
<?php  }
            break;
        default: {
                echo "no se ha seleccionado un idioma";
                break;
            }
    }
}