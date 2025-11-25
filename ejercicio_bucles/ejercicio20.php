<?php
function es_primo($numero){
    if($numero<2){return $numero." no es primo <br>";}
    if($numero==2){return $numero." es primo <br>";}
    //para comprobar si un numero es primo descarto los numero que esten por debajo de su raiz 
    $num_max=sqrt($numero);
    for($i=3;$i<=$num_max;$i++){
        if($numero % $i == 0){
            return $numero." no es primo <br>";
        }
    }
return $numero." es primo <br>";
}
$datos=array();
$datos[0]=2;
$datos[1]=3;
$datos[2]=44;
$datos[3]=13;
$datos[4]=24;
$datos[5]=21;
$datos[6]=17;
$datos[7]="hola";
$datos[8]=".txt";
$num_datos= count($datos);
for($i=0;$i<$num_datos;$i++){
    if(is_numeric($datos[$i])){
        echo es_primo($datos[$i]);
    }else{
        echo "el dato en la posicion " .$i." no es numerico y es: ".$datos[$i]. "<br>";
    }
}
?>