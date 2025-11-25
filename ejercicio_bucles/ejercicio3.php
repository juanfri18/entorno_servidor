<?php
$numeroDia = 3;
    switch(true){
        case ($numeroDia == 1):
            echo "es lunes";
            break;
        case ($numeroDia == 2):
            echo "es martes";
            break;
        case ($numeroDia == 3):
            echo "";
            break;
        case ($numeroDia == 4):
            echo "es jueves";
            break;
        case ($numeroDia == 5):
            echo "es viernes";
            break;  
        case ($numeroDia == 6):
            echo "es sabado";
            break;
        case ($numeroDia == 7):
            echo "es domingo";  
            break;
        default:
            echo "no es un dia valido";
    } 
?>