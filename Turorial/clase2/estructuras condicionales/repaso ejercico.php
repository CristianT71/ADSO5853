<?php
/**Ejercicio:
 
En una fábrica de computadores se plantea ofrecer a los clientes un descuento que dependerá del número de computadores que compre.
Si los computadores son menos de 5, se le dará un descuento del 10%;
si el número de computadores comprados es mayor o igual a 5 pero menos de 10 se le otorga un 20% de descuento;
y si son más de 10 se les da un 40% de descuento.
El precio de cada computador es de $700 USD. 
 */

define("PRECIO", 700);
$cantidad = 3;
$descuento1 = 10;
$descuento2 = 20;
$descuento3 = 40;

if($cantidad < 5){
    $descuentoNo1 = (PRECIO * $cantidad) * ($descuento1 / 100);
    $total = (PRECIO * $cantidad - $descuentoNo1);
    $PrecioSindescuento = (PRECIO * $cantidad);
    echo "El total sin descuento es: $PrecioSindescuento ";
    echo "El total final con descuento es: $total ";
}

if($cantidad >= 5 && $cantidad < 10){
    $descuentoNo2 = (PRECIO *$cantidad) * ($descuento2 / 100);
    $total = (PRECIO * $cantidad - $descuentoNo2);
    $PrecioSindescuento = (PRECIO * $cantidad);
    echo "El total sin descuento es: $PrecioSindescuento ";
    echo $total;
}

if($cantidad >= 10){
    $descuentoNo3 = (PRECIO * $cantidad) * ($descuento3 / 100);
    $total = (PRECIO * $cantidad - $descuentoNo3);
    $PrecioSindescuento = (PRECIO * $cantidad);
    echo "El total sin descuento es: $PrecioSindescuento ";
    echo $total;
}

?>