<?php
/** 
 * Hacer un programa que calcule el total a pagar por la compra de camisas. 
 * Si se compran tres camisas o más se aplica un descuento del 20% sobre el total, 
 * y si son menos de tres camisas un descuento del 10%.
 */

$cantidad = 2;
define("PRECIO", 400);
$descuento1 = 0.2;
$descuento2 = 0.1;

$totalsindesuento = $cantidad * PRECIO;

$descuento = ($cantidad >= 3) ? $descuento1 : $descuento2;

$total = $totalsindesuento - ($totalsindesuento * $descuento);

echo "Cantidad de camisas: $cantidad<br>";
echo "Precio Sin desccuento: " . PRECIO . "<br>";
echo "Descuento aplicado: " . ($descuento * 100) . "%<br>";
echo "Total a pagar: $" . $total;
?>
