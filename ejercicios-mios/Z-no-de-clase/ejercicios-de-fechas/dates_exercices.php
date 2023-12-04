<?php

date_default_timezone_set("Europe/Paris");

setlocale(LC_TIME, "fr_FR");

$dd1 = DateTime::createFromFormat("d/m/Y", "14/07/2019");
$dd2 = new DateTime("2019-07-14");

echo $dd1->format("W") . "<br>";


$dd1 = new DateTime("2019-09-23");
$dd2 = new DateTime("2020-06-12");

$i = $dd2->diff($dd1);

echo $i->days . "<br>";


$dd2 = new DateTime("2024-07-14");

echo $dd2->format("L") . "<br>";


$oDate =  DateTime::createFromFormat("d/m/Y", "3/7/2019");
 
$errors = DateTime::getLastErrors();
 
if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !<br>";
}
else {
    echo "OK <br>";
}


$dd2 = new DateTime();

echo $dd2->format("H\hi") . "<br>";


$dd2 = new DateTime();

$dd2->add(new DateInterval('P1M'));

echo $dd2->format("d/m/Y") . "<br>";


$date = new DateTime('now');
$date->modify('+1 month'); 
$date = $date->format('Y-m-d');

echo $date . "<br>";

echo date("d/m/Y", strtotime('+1 month')) . "<br>";

$dd2 = new DateTime();
$dd2->setTimestamp(1000200000);
echo $dd2->format("d/m/Y") . "<br>";

echo date("d/m/Y", 1000200000) . "<br>";


echo strftime("%A %e %B %Y", 1000200000) . "<br>";


