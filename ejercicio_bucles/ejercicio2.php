<<<<<<< HEAD
<?php 
$edades= array(32,23,12,12,9,18,45,89,64);
foreach($edades as $edad){
    switch(true){
        case ($edad<12 && $edad>0):
            echo "$edad pertenence al grupo de niños <br>";
            break;
        case ($edad>=13 && $edad<17):
            echo "$edad pertenence al grupo de adolescente <br>";
            break;
        case ($edad>=18 && $edad<64):
            echo "$edad pertenence al grupo de adultos <br>";
            break;
        case ($edad>=65):
            echo "$edad pertenence al grupo de adultos mayores <br>";
        default:
            echo "$edad no es una edad válida <br>";
    } 
}

=======
<?php 
$edades= array(32,23,12,12,9,18,45,89,64);
foreach($edades as $edad){
    switch(true){
        case ($edad<12 && $edad>0):
            echo "$edad pertenence al grupo de niños <br>";
            break;
        case ($edad>=13 && $edad<17):
            echo "$edad pertenence al grupo de adolescente <br>";
            break;
        case ($edad>=18 && $edad<64):
            echo "$edad pertenence al grupo de adultos <br>";
            break;
        case ($edad>=65):
            echo "$edad pertenence al grupo de adultos mayores <br>";
        default:
            echo "$edad no es una edad válida <br>";
    } 
}

>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>