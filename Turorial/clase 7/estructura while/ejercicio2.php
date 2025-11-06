<?php
/**
 *Diseñe un codigo que imprima la tabla de multiplicar de un numero entre el 1 y el 12 
 */

$num = 1;
$multiplicador = 1;

while ($multiplicador <=12){
    echo $num . "X" . $multiplicador . "=" . ($num * $multiplicador) . "<br>";
    $multiplicador++;
}
?>