<?php

$numero = readline("Ingrese un numero:  ");
$contador = 0;

for($x = 1 ; $x <= $numero; $x++){
    if ($numero % $x == 0){
        $contador = $contador + 1; 
        echo $contador; 
    }
}
if($contador == 2){
    echo "El numero $numero es primo";
}else{
    echo "El numero $numero no es primo";
}