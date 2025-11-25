<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
</head>
<style>
    table {
        border-collapse: collapse;
        border-top:2px solid black;
        border-bottom:2px solid black;
        margin: 30px auto;
        border: 2px solid black;
        width: 60%;

    }
    td{
       border: none; 
       padding: 10px;
    }
    thead{
        background-color: #775f81ff;
        color: white;
    }
    tbody{
                background-color: #ffffffff;
    }
</style>
<body>
    <table>
        <thead>
            <tr>
                <td>VECTORES ORIGINALES</td> 
            
                <td>
                    <?php
                    //le pongo 10 valores aleatorios
                    $lista_vectores=array();
                    for($i=0;$i<12;$i++){
                        $lista_vectores[$i]=rand(0,1000);
                        if($i==11){
                             echo $lista_vectores[$i];
                        }
                        else{
                            echo $lista_vectores[$i]."-";
                        }
                    }
                                
                            echo"</td>";
                        echo "</tr>"; 
                    echo "</thead>";
                    echo "<tbody>";
                        echo"<tr>";
                            echo"<td>Mayor</td>";
                            echo "<td>";   
                            //hago que me de el valor mas grande del array                 
                        $num_mayor=$lista_vectores[0];
                        foreach($lista_vectores as $vector){
                            if($num_mayor<=$vector){
                                $num_mayor=$vector;
                            }
                        }
                        echo $num_mayor;
                        echo"</td>";
                        echo "</tr>";
                        echo"<tr>";
                            echo"<td>menor</td>";
                            echo "<td>";                    
// se pyede hacer de la manera anteiro o de esta 
                        echo min($lista_vectores);
                        echo"</td>";
                        echo "</tr>";   
                        echo"<tr>";
                        //ordeno el vector al reves de como estaba al inicio
                        echo"<td>vector inverso</td>";
                        echo "<td>";    
                        $inverso=array_reverse($lista_vectores);
                       for($x=0;$x<12;$x++){
                            if($x==11){
                                echo $inverso[$x] ; 
                            }else {
                            echo $inverso[$x]."-" ;
                        }
                        }                        
                        echo"</td>";
                        echo "</tr>";
                        echo"<tr>";
                        //ordeno los vectores 
                        echo"<td>vector ordenado</td>";
                        echo "<td>";    
                        sort($lista_vectores);
                       for($z=0;$z<12;$z++){
                            if($z==11){
                                echo $lista_vectores[$z] ; 
                            }else {
                            echo $lista_vectores[$z]."-" ;
                        }
                        }                        
                        echo"</td>";
                        echo "</tr>";
                        echo"<tr>";
                        //muestro solo pares 
                        echo"<td>vector ordenado</td>";
                        echo "<td>";    
                        $i=0;
                       for($i=0;$i<12;$i++){

                                if($lista_vectores[$i]%2==0){
                                echo $lista_vectores[$i]."-" ; 
                            }
                        }
                                                
                        echo"</td>";
                        echo "</tr>";
                                                echo"<tr>";
                        //muestro solo impares 
                        echo"<td>vector ordenado</td>";
                        echo "<td>";    
                        $i=0;
                       for($i=0;$i<12;$i++){

                                if($lista_vectores[$i]%2!=0){
                                echo $lista_vectores[$i]."-" ; 
                            }
                        }
                                                
                        echo"</td>";
                        echo "</tr>";                                                                                 
                    ?>
                
            
        </tbody>
    </table>
</body>