<<<<<<< HEAD
<?php
    $elementos=array(1,"hola",4,54,"345",7.55,".");
    //muestro todos los elemetnos 
    echo "Estos son todos los valores: <br>";
    foreach($elementos as $elemento){
        echo $elemento."<br>"; 
    }
//muestro los elementos que son enteros y los sumo
$suma=0;
$contador=0;
 foreach($elementos as $elemento){
        if(is_numeric($elemento)){
            echo "en la psosicon $contador hay un elemento numero el cual es : $elemento <br>";
            $suma=$suma+$elemento;
            $contador++;
        }
    }
    $media=$suma/$contador;
    echo "la suma de los valores son $suma .<br>";
    echo "la media de todos los numeros es : $media <br>";
    echo "se han encontrado un total de $contador de elementos numericos. <br>";
=======
<?php
    $elementos=array(1,"hola",4,54,"345",7.55,".");
    //muestro todos los elemetnos 
    echo "Estos son todos los valores: <br>";
    foreach($elementos as $elemento){
        echo $elemento."<br>"; 
    }
//muestro los elementos que son enteros y los sumo
$suma=0;
$contador=0;
 foreach($elementos as $elemento){
        if(is_numeric($elemento)){
            echo "en la psosicon $contador hay un elemento numero el cual es : $elemento <br>";
            $suma=$suma+$elemento;
            $contador++;
        }
    }
    $media=$suma/$contador;
    echo "la suma de los valores son $suma .<br>";
    echo "la media de todos los numeros es : $media <br>";
    echo "se han encontrado un total de $contador de elementos numericos. <br>";
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>