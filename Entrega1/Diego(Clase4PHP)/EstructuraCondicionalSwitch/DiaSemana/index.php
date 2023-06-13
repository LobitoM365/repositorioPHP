<?php

$diaSemana = readline("Por favor ingrese el dia de la semana:  ");

switch ($diaSemana) {
    case 1:
        echo "El día de la semana es Lunes";
        break;
    case 2:
        echo "El día de la semana es Martes";
        break;
    case 3:
        echo "El día de la semana es Miércoles";
        break;
    case 4:
        echo "El día de la semana es Jueves";
        break;
    case 5:
        echo "El día de la semana es Viernes";
        break;
    case 6:
        echo "El día de la semana es Sábado";
        break;
    case 7:
        echo "El día de la semana es Domingo";
    default:
        echo "El día de la semana ($diaSemana) no es válido... Por favor ingrese un día de la semana entre 1 y 7";
        break;
}
