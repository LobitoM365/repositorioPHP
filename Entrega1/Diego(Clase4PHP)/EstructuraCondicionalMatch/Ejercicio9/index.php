<?php
$hora = readline("Ingrese la hora en formato 'HH:MM': "  );


$hora = $hora[0] .$hora[1];
$hora = (int)$hora;


$resultado = match(true){
    $hora >= 20 => "Ya es hora de acostarse",
    $hora >= 14 => "Ya estamos en la tarde",
    $hora >= 12 => "Es media día",
    $hora >= 07 =>  "Es temprano",
    $hora >= 05 =>  "Es hora de levantarse",
    default => "Ingrese un formato de hora válido"
};

echo $resultado;