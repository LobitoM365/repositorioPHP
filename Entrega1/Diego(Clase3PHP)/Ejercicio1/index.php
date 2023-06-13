<?php
$percioComputador = 700;
$cantidadComputadores = 4;

if ($cantidadComputadores < 5) {
    $descuento = $percioComputador * 0.1;

    $precioTotal = $percioComputador - $descuento;
    echo "Por la compra de $cantidadComputadores computadores se le hara un descuento del 10% equivalentes a $$descuento USD, por lo cual es precio a pagar es de $$precioTotal USD.";
} else if ($cantidadComputadores == 5 || $cantidadComputadores < 10) {
    $descuento = $percioComputador * 0.2;
    $precioTotal = $percioComputador - $descuento;
    echo "Por la compra de $cantidadComputadores computadores se le hara un descuento del 20% equivalentes a $$descuento USD, por lo cual es precio a pagar es de $$precioTotal USD.";
} else if ($cantidadComputadores >= 10) {
    $descuento = $percioComputador * 0.4;
    $precioTotal = $percioComputador - $descuento;
    echo "Por la compra de $cantidadComputadores computadores se le hara un descuento del 40% equivalentes a $$descuento USD, por lo cual es precio a pagar es de $$precioTotal USD.";
}
