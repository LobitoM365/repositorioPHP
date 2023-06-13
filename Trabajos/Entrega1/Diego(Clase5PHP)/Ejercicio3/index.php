<?php

$cantidadNumero = floatval(readline("Ingrese un numero:  "));
$factorial = 1;
for ($x = 1; $x <= $cantidadNumero; $x++) {
    $factorial = $factorial * $x;
}


echo "El factorial del numero $cantidadNumero =  $factorial"; 