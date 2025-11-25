<?php 
$cadena="Aaaaa023";
if(preg_match("`^[A-Z][a-z]{2,}[0-9]{3}$`",$cadena)){
    echo"Si cumple el patron";
}else{
    echo"No cumple el patron";
}
?>