<?php
/**Crear un programa que divida un número, si no es divisible por 5. */

$numero = 25;
$divisor = 5;
$cociente = $numero / $divisor;

if($numero % 5 != 0){
    echo "El número $numero no es divisible por 5, el número $numero divido por $divisor es = $cociente";
}

else {
    echo "El número $numero es divisible por 5";
}
?>