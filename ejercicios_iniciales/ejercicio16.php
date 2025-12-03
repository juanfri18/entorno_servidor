<<<<<<< HEAD
<?php 
$array_valores= array( 5 => 1, 12 => 2, 13 => 56, "x" => 42);
echo "La variable tiene ".count($array_valores)." elementos<br>";
echo "borro el elemento de la posición 12<br>";
//unset elimina el elemento del array en la posición indicada
unset($array_valores[5]);
echo "La variable tiene ".count($array_valores)." elementos<br>";
unset($array_valores);
echo "La variable tiene ".count($array_valores)." elementos<br>";
=======
<?php 
$array_valores= array( 5 => 1, 12 => 2, 13 => 56, "x" => 42);
echo "La variable tiene ".count($array_valores)." elementos<br>";
echo "borro el elemento de la posición 12<br>";
//unset elimina el elemento del array en la posición indicada
unset($array_valores[5]);
echo "La variable tiene ".count($array_valores)." elementos<br>";
unset($array_valores);
echo "La variable tiene ".count($array_valores)." elementos<br>";
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>