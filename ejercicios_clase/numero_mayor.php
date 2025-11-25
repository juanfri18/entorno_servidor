<?php 
$num1 = 5;
$num2 = 4;
$num3 = 78;
if($num1>=$num2 && $num1>=$num3){
    echo "El numero mayor es: $num1";
}elseif($num2>=$num1 && $num2>=$num3){
    echo "El numero mayor es: $num2";
    
}else {
    echo "El numero mayor es: $num3";
}
?>