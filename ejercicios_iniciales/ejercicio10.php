<?php
//fahrenheit
$varaiable1= trim(fgets(STDIN));

echo " $varaiable1 grados fahrenheit son ". round((($varaiable1-32)*5/9),2)." grados centigrados";
?>