<?php
/** Crear un programa que determine si un año es bisiesto o no.*/

$año = 1900;

if($año % 4 != 0){
    echo "El año $año no es bisiesto";
}
elseif($año % 100 != 0){
    echo "El año $año es bisiesto";
}
elseif($año % 400 == 0){
    echo "El año $año es bisiesto";
}

else {
    echo"El año $año no es bisiesto";
}

?>