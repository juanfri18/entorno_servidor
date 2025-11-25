<?php 
$var1 = 5;
$var2 = "5";
$var3 = 10;
//A)
//esta mira si lo que hay dentro de la variable es lo miso 
echo "var1==var2 " . $var1==$var2 . "<br>"; 
//esta mira si son identicas , por loque tiene que ser del mismo tipo y tener el mismo valor
echo "var1===var2 " . $var1===$var2 . "<br>";
//B)
echo "var1>var2 ". $var1>$var2 . "<br>"; 
echo "var1<var2 " . $var1<$var2 . "<br>";
echo "var1>=var2 " . $var1>=$var2 . "<br>";
echo "var1<=var2 " . $var1<=$var2 . "<br>";
?>