<?php 
// EJERCICIO 2 
$var1 = "123.45" ;
echo "El tipo de var1 es " . gettype($var1) . " y su valor es $var1 <br>";
//convierto la variable a enntero
settype($var1, "integer");
echo "El tipo de var1 es " . gettype($var1) . " y su valor es $var1 <br>";
// Convierto la variable a float
settype($var1, "float");
echo "El tipo de var1 es " . gettype($var1) . " y su valor es $var1 <br>";
//convierto la variable a booleano
settype($var1, "boolean");
echo "El tipo de var1 es " . gettype($var1) . " y su valor es $var1 <br>";
?>