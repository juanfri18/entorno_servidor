<?php
    $numero_maximo=-1;
    $numero_menor=10000;
    $numeros=array(23,244,1,544,344,29,70,7,77,0);
    foreach($numeros as $numero){
        if($numero_maximo<=$numero){
            $numero_maximo=$numero;
        }
        if($numero_menor>=$numero){
            $numero_menor=$numero;
        }     
    }    
echo "el numero mas grande es $numero_maximo <br>";
echo "El numero mas pequeño es $numero_menor <br>";

?>