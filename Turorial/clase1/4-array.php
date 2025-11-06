<?php
// Declaración de un array vacío
$perrito = array();

// Array con información
$gatito = [         // POS  
    2,              // 0
    "hola",         // 1
    "diego",        // 2
    "Fernando"      // 3
];

// Mostrar el valor en la posición 3
echo $gatito[3];
echo "<br>";

// Modificar el contenido de la posición 3
$gatito[3] = "armando";

// Mostrar el nuevo valor
echo $gatito[3];
echo "<br>";
?>