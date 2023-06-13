<?php

$numero = readline("Ingrese un numero:  ");

$numero1 = 0 ;
$numero2 = 1;

echo $numero1 . "\n" . $numero2 ."\n";
for($u = 0; $u <= $numero - 3; $u++){
    $suma = $numero1 + $numero2;
    $numero1 = $numero2;
    $numero2 = $suma;
    echo $suma . "\n";

}