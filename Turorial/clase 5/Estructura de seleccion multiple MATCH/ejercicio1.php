<?php
/** Escribe un programa que tome un número entero como entrada y muestre un mensaje diferente dependiendo de si el número es 1, 2 o 3 utilizando el ciclo match */

$a = 8;

$resultado = match ($a) {
    1 => "Es el número 1",
    2 => "Es el número 2",
    3 => "Es el número 3",
    default => "No es ninguno"
};

echo $resultado;
?>