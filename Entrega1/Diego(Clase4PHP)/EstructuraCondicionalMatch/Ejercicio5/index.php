<?php


$diaSemana = readline("Por favor ingrese el dia de la semana:  ");

$resultado = match ((int)$diaSemana) {

    1 => "El día de la semana es Lunes",
    2 =>  "El día de la semana es Martes",
    3 =>  "El día de la semana es Miércoles",
    4 => "El día de la semana es Jueves",
    5 => "El día de la semana es Viernes",
    6 => "El día de la semana es Sábado",
    7 =>  "El día de la semana es Domingo",
    default => "El día de la semana ($diaSemana) no es válido... Por favor ingrese un día de la semana entre 1 y 7"
};


echo $resultado;