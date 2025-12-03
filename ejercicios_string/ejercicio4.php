<<<<<<< HEAD
<?php 
$cadenas=["agua","azul","aguacero","azuzena","romero"];
foreach($cadenas as $cadena){
    $cadena_comprobar=substr($cadena,0,3);  
    echo $cadena_comprobar;
    echo "<br>";
    foreach($cadenas as $cadena2){
        echo $cadena2;
       /* if($cadena_comprobar==$cadena2){
            echo"Escribir en verde<br>";
        }else{
            echo "escribir en rojo<br>";
        }
            */
    }
    echo "<br>";
}
=======
<?php 
$cadenas=["agua","azul","aguacero","azuzena","romero"];
foreach($cadenas as $cadena){
    $cadena_comprobar=substr($cadena,0,3);  
    echo $cadena_comprobar;
    echo "<br>";
    foreach($cadenas as $cadena2){
        echo $cadena2;
       /* if($cadena_comprobar==$cadena2){
            echo"Escribir en verde<br>";
        }else{
            echo "escribir en rojo<br>";
        }
            */
    }
    echo "<br>";
}
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>