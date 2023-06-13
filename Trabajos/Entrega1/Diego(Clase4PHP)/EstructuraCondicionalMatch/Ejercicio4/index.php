<?php

$fecha = readline("Ingrese una fecha con el formato dia/mes/año: ");

$dia = $fecha[3] . $fecha[4];


$resultado = match($dia){
    "01" => "El mes es enero",
    "02" => "El mes es febrero",
    "03" => "El mes es marzo",
    "04" => "El mes es abril",
    "05" => "El mes es mayo",
    "06" => "El mes es junio",
    "07" => "El mes es julio",
    "08" => "El mes es agosto",
    "09" => "El mes es septiembre",
    "10" => "El mes es octubre",
    "11" => "El mes es noviembre",
    "12" => "El mes es diciembre",
    default => "El mes $dia no existe",
};
 echo $resultado;