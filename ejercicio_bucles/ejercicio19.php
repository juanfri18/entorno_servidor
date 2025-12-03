<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <h2>Tabla de números Fibonacci</h2>
     <table border="1" cellpadding="3">
        <tr>
            <?php
                for ($i = 0; $i <= 15; $i++) {
                    echo '<td style="background-color: #fcfcfcff; color: black;"><strong>'.$i.'</strong></td>';                
                }
            ?>
        </tr>
        <tr>
            <?php 
            //FIBONACCI
            $numeros_fibonacci=array();
            $numeros_fibonacci[0]=0;
            $numeros_fibonacci[1]=1;
            for($i=0;$i<=15;$i++){
                if($i==0){ 
                echo '<td style="background-color: #a5a5a5ff; color: black;">'.$i .'</td>';

                }elseif($i==1){
                echo '<td style="background-color: #a5a5a5ff; color: black;">'.$i .'</td>';
                }else{
                    $numeros_fibonacci[$i]=$numeros_fibonacci[$i-1] + $numeros_fibonacci[$i-2];
                echo '<td style="background-color: #a5a5a5ff; color: black;">'.$numeros_fibonacci[$i] .'</td>';


                }
            }
            ?>
        
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <h2>Tabla de números Fibonacci</h2>
     <table border="1" cellpadding="3">
        <tr>
            <?php
                for ($i = 0; $i <= 15; $i++) {
                    echo '<td style="background-color: #fcfcfcff; color: black;"><strong>'.$i.'</strong></td>';                
                }
            ?>
        </tr>
        <tr>
            <?php 
            //FIBONACCI
            $numeros_fibonacci=array();
            $numeros_fibonacci[0]=0;
            $numeros_fibonacci[1]=1;
            for($i=0;$i<=15;$i++){
                if($i==0){ 
                echo '<td style="background-color: #a5a5a5ff; color: black;">'.$i .'</td>';

                }elseif($i==1){
                echo '<td style="background-color: #a5a5a5ff; color: black;">'.$i .'</td>';
                }else{
                    $numeros_fibonacci[$i]=$numeros_fibonacci[$i-1] + $numeros_fibonacci[$i-2];
                echo '<td style="background-color: #a5a5a5ff; color: black;">'.$numeros_fibonacci[$i] .'</td>';


                }
            }
            ?>
        
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
        </tr>