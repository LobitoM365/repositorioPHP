<?php
$cantidadCamisas =  readline("Ingrese la cantidad de camisas que desea comprar:  ");

$precioInicial = 40000;
$precioNormal = $precioInicial * $cantidadCamisas;

( $cantidadCamisas > 3) ?  $precioTotal =   $precioNormal - ($precioNormal * 0.2)  : $precioTotal = $precioNormal - ($precioNormal * 0.1)  ;

echo $precioTotal;