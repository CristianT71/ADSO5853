<?php 
/* Escribir un programa que calcule el descuento aplicable a una compra de acuerdo al monto total 
si el monto es mayor o igual a 1.000, aplicar descuento del 10%
si el monto es mayor o igual a 500 aplicar descuento del 5%
si el monto es menor a 500, no aplicar descuento */
$monto =300; 

$resultado = ($monto * 0.10); 
$resultado1 = ($monto * 0.05); 
$operacion = $monto - $resultado;
$operacion1 = $monto - $resultado1;

if ($monto >=1000) {
    echo " el monto de la compra es de $monto el decuento es de $resultado y el total a pagar es de $operacion";
}
    elseif ($monto >=500 && $monto <=999) {
        echo "el monto de la compra es de $monto el descuesto es de $resultado1 y el total es de $operacion1";
    } else 
        echo "el monto de la compra es de $monto es menor a 500, no aplica el descuento";

?>