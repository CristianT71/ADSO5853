<?php
/** Desarrollar un programa que determine si un número es divisible por 3 y por 5.*/


$numero = 35;
$a = 15;
$b = 15;

if($numero % 3 == 0){
    echo "El $numero es divisible por $a";
}
elseif($numero % 5 == 0){
    echo "El $numero es divisible por $b";
}
else{
    echo "El número $numero no es divisible por 3 ni por 5";
}
?>