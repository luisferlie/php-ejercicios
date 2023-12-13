<?php
$url = "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
$contenido = file_get_contents($url);
var_dump($contenido);
$canales_arr = json_decode($contenido);
var_dump($canales_arr);