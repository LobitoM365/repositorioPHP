<?php
$numero = readline("Ingrese un número del 1 al 12");



$resultado = match ($numero) {
    "1" => "El mes es enero",
    "2" => "El mes es febrero",
    "3" => "El mes es marzo",
    "4" => "El mes es abril",
    "5" => "El mes es mayo",
    "6" => "El mes es junio",
    "7" => "El mes es julio",
    "8" => "El mes es agosto",
    "9" => "El mes es septiembre",
    "10" => "El mes es octubre",
    "11" => "El mes es noviembre",
    "12" => "El mes es diciembre",
    default => "El numero $numero no es válido... Por favor ingrese un número entre 1 y 12",
};
echo $resultado;
