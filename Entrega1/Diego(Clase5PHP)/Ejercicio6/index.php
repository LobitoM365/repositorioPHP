<?php

$numero = readline("Ingrese un numero:  ");
$numeroAlrevez = "";
for($x = strlen($numero) - 1 ; $x >= 0 ; $x--){
    $numeroAlrevez = $numeroAlrevez . $numero[$x];
}

echo "El numero $numero alrevez es $numeroAlrevez";

