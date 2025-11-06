<?php

/**
 * Diseñe un codigo que imprima la tabla multiplicar de un numero entre el 1 y el 12
 */
$num = 1;
$multiplicador = 1;

do {
    echo $num . "X" . $multiplicador . "=" . ($num * $multiplicador) . "<br>";
    $multiplicador++;
} while ($multiplicador <=12);
?>