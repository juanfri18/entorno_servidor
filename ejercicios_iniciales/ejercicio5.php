<?php 
$num=0;
$num2= null;
echo "el valor de num con isset() es " . isset($num) . "<br>";
echo "el valor de num con empty() es " . empty($num) . "<br>";
echo "el valor de num2 con isset() es " . isset($num2) . "<br>";
echo "el valor de num2 con empty() es " . empty($num2) . "<br>";
unset($num);
echo "la variable  num ha sido destruida con unset() <br>";
?>