<?php
/**
 * Ejercicio:
 * En una fábrica de computadores se plantea ofrecer a los clientes un descuento que dependerá del número de computadores que compre.
 * Si los computadores son menos de 5, se le dará un descuento del 10%;
 * si el número de computadores comprados es mayor o igual a 5 pero menos de 10 se le otorga un 20% de descuento;
 * y si son más de 10 se les da un 40% de descuento.
 * El precio de cada computador es de $700 USD.
 */

define("PRECIO", 700);
$cantidad = 5;

if ($cantidad < 5) {
    $descuento = PRECIO * $cantidad * 0.10;
    $total = PRECIO * $cantidad - $descuento;
    echo "El total de su compra con el 10% de descuento es: $" . $total;
}
elseif ($cantidad >= 5 && $cantidad < 10) {
    $descuento = PRECIO * $cantidad * 0.20;
    $total = PRECIO * $cantidad - $descuento;
    echo "El total de su compra con el 20% de descuento es: $" . $total;
}
else {
    $descuento = PRECIO * $cantidad * 0.40;
    $total = PRECIO * $cantidad - $descuento;
    echo "El total de su compra con el 40% de descuento es: $" . $total;
}
?>
