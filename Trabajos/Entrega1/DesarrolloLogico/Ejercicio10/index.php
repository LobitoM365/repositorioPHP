<?php

$numero = readline("Ingresa el numero de elementos desea añadir a la lista:  ");

$lista = array();

for ($x = 1; $x <= $numero; $x++) {
    $elemento = readline("Ingrese un numero en el puesto N°$x de la lista:  ");
    array_push($lista, $elemento);
}


for ($i = 1; $i <= $numero; $i++) {
    for ($j = 0; $j <= $numero - 2; $j++) {
        if ($lista[$j] > $lista[$j + 1]) {
            $aux  = $lista[$j];
            $lista[$j] = $lista[$j + 1];
            $lista[$j + 1] = $aux;
        }
    }
}
echo "Los numero ingresados en la lista ordenados de menos a mayor se ven: \n";
for ($l = 0; $l < $numero; $l++) {
    echo " $lista[$l]\n";
}
