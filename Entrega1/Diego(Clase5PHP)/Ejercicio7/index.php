<?php

$numero = readline("Ingrese la cantidad de elemntos que desea añadir a la lista:  ");
$lista = array();

for ($x = 0; $x < $numero; $x++) {
    $Elementos = readline("Ingrese el elemento numero " . $x + 1 . " :  ");
    array_push($lista, strtolower($Elementos));
}
$hola = array_search("hola", $lista);
if (in_array("hola", $lista)) {
    echo "La palabra  $lista[$hola] existe en la posicion $hola." ;
}else{
    echo "La palabara 'hola' no existe en la lista,";
}
