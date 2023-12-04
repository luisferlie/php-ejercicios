<?php
$hora = rand(0, 11);
$minutos = rand(0, 59);
$min_grados = $hora * 60 + $minutos;
/* minutos maximos a las 12 horas*/
$max_grados = 12 * 60;
$horas_rot = ($hora / 12) * 360;
$min_rot = ($minutos / 60) * 360;



?>

<h2>Son las <?= $hora . ":" . $minutos ?></h2>

<p>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="220" height="220" viewBox="-110 -110 220 220">
        <circle cx="0" cy="0" r="100" fill="white" stroke="black" stroke-width="5" />
        <line x1="0" y1="0" x2="0" y2="-60" stroke="green   " stroke-width="5"
            transform="rotate(<?= $horas_rot ?>, 0, 0)" />
        <line x1="0" y1="0" x2="0" y2="-80" stroke="green" stroke-width="5" transform="rotate(<?= $min_rot ?>, 0, 0)" />
    </svg>
</p>