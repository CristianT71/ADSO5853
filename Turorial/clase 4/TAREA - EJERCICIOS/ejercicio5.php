<?php
/**	Escribir un programa que clasifique a un estudiante en Aprobado (nota mayor o igual a 60), Reprobado (nota menor a 60) o Sobresaliente (nota mayor o igual a 90). */

$Nota = 90;

if($Nota >= 60 && $Nota < 90){
    echo "Haz Aprobado con una nota de $Nota, Felicitaciones";
}

elseif($Nota < 60){
    echo "Haz reprobado con una nota de $Nota, ponte a estudiar";
}
else {
    $Nota <= 90;
    echo "Aprobaste con una nota sobresaliente de $Nota, felicitaciones";
}
?>