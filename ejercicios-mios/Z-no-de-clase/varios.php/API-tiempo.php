<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h2>El tiempo en Zaragozaa</h2>
    <?php
    $claveAPI = 'df7612b83809dcd1fee8595405324017';
    $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Zaragoza,Spain&units=metric&appid=$claveAPI");
    echo "<h3>Datos en bruto (en formato JSON): </h3>$datos<hr>";
    $tiempo = json_decode($datos);
    echo "<h3>Datos en un objeto: </h3>";
    print_r($tiempo);
    echo "<hr>";
    echo "<h3>Datos sueltos: </h3>";
    echo "Temperatura: " . $tiempo->main->temp . "ºC<br>";
    echo "Humedad: " . $tiempo->main->humidity . "%<br>";
    echo "Presión: " . $tiempo->main->pressure . "mb<br>";
    ?>
</body>

</html>