<?php
$usuarios=["juanfri18","&smael","!smael","!smae?","*smael","Albert"];

foreach($usuarios as $usuario){
   /* if(preg_match('/[&!?*]/', $usuario)){
        echo "$usuario incorrecto<br>";
    } else {
        echo "$usuario correcto<br>";
    
    }*/
    if(!strpbrk($usuario,"&!?*")){
        echo"$usuario correcto <br>";
    }else{
        echo"$usuario incorrecto <br>";

    }
}
?>
