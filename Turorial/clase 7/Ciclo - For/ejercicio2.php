<?php
/**
 * Escriba un cogigo que muestre la suma de primeros 10 numeros enteros
 */

for ($num = 1; $num <= 10; $num++):
    for ($mul = 1; $mul <= 10; $mul++):
        echo $num * $mul . "  ";
    endfor;
    echo "<br>";
endfor;
?>