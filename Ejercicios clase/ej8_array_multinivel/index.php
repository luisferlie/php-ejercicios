<?php
include "datos.php";
$html = '';
$canciones_html = '';
foreach ($artistas as $indice => $data) {
    $html .= "$indice tiene un nombre de {$data['name']} <br>";
    foreach ($data['songs'] as $canciones) {
        $canciones_html .= "<strong>{$canciones['title']}</strong> y puedes escucharla en <a href='{$canciones['link']}'>aquí</a><br><br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="artista"><?= $html ?></div>
    <hr>
    <div id="canciones"><?= $canciones_html ?></div>
</body>

</html>