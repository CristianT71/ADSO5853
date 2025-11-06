<?php
/**Desarrolle un programa que indique el rango de una calificacion de acuerdo a la siguiente tabla:
 -90 - 100: excelente
 -80 - 89: Bueno
 -70 - 79: Regular
 -60 - 69: Aprobado
 -0 - 59: Reprobado
 *
*/

$calificacion = 10;


if($calificacion >= 0 && $calificacion < 60){
    echo "Haz Reprobado";
}
elseif($calificacion >= 60 && $calificacion < 70){
    echo "Aprobado";
}
elseif($calificacion >= 70 && $calificacion < 80){
    echo "Regular";
}

elseif($calificacion >= 80 && $calificacion < 90){
    echo "Bueno";
}

else{
    $calificacion >= 90 && $calificacion <= 100;
}
?>