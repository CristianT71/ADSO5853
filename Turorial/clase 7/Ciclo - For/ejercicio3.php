<?php
/**
 * Diseñe un codigo que genere un ciclo for imprimir las tablas del 1 al 10 
 */

for ($num = 1; $num <= 10; $num++):
    for ($mul = 1; $mul <= 10; $mul++):
        echo $num . " x " . $mul . " = " . ($num * $mul) . "<br>"; 
    endfor;
    echo "<br>"; // Salto de línea entre tablas
endfor;


?>