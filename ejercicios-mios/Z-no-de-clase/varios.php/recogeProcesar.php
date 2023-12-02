<?php

var_dump($_REQUEST);
var_dump($_GET['edad']);

$nombre = (trim(htmlspecialchars(strip_tags($_GET["nombre"]))));
$edad = 0 + $_GET["edad"];
echo "tu edad es $_GET[edad] y tu nombre $nombre";
