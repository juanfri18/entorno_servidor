<?php 
// EJERCICIO 1
$dia_semana =date("N");
echo " Numero del dia de la semana: $dia_semana";
if($dia_semana >= 1  && $dia_semana <=5){
    echo " Es un dia laboral";
}else{
    echo " No es un dia laboral";
}
?>