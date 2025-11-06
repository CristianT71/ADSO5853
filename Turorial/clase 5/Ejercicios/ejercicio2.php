<?php
/** Escribir un programa que muestr el dia de la semana correspondiente a un número del 1 al 7. Considere que el 1 es Lunes y 7 es Domingo.
*/
echo "Ingrese un numero del 1 al 7\n";
$numero = 20;

if($numero == 1){
    echo "El día número $numero, es lunes";
}

elseif($numero == 2){
    echo "El día número $numero, es Martes";
}

elseif($numero == 3){
    echo "El día número $numero, es miércoless";
}

elseif($numero == 4){
    echo "El día número $numero, es Jueves";
}

elseif($numero == 5){
    echo "El día número $numero, es Viernes";
}

elseif($numero == 6){
    echo "El día número $numero, es Sábado";
}

elseif($numero == 7){
    echo "El día número $numero, es Domíngo";
}

else{
    echo "El número ingresado no corresponde a un día de la semana, por favor, seleccione un número del 1 al 7";
}
?>