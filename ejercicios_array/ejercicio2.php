<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<style>
    table {
        border-collapse: collapse;
        border-top:2px solid #addf73ff;
        border-bottom:2px solid #addf73ff;
        margin: 30px auto;
        border: 2px solid #addf73ff;
        width: 60%;

    }
    td{
       border: none; 
       padding: 10px;
    }
    thead{
        background-color: #addf73ff;
        color: white;
    }
    tbody{
        background-color: #ffffffff;
    }
</style>
<body>
    <table>
        <thead>
            <div>
            <tr>
                <td>Ciudad(nombre_posición)</td> 
            
                <td>
                    
                    <?php
                    //cabecera
                            echo"Población (contenido)";    
                            echo"</td>";
                        echo "</tr>"; 
                    echo "</thead>";
                    $ciudades=array("madrid"=>3000000,"granada"=>150000,"barcelona"=>2879200,"Malaga"=>240000,"Sevilla"=>500000,"Valencia"=>1584600,"Tarragona"=>485210);

                    echo "<tbody>";
                       
                            //hago que me de el valor mas grande del array                 
                        foreach($ciudades as $ciudad => $num_habitantes){ 
                            echo"<tr>";
                            echo"<td>".$ciudad."</td>";
                            echo "<td>".$num_habitantes."</td>";
                            echo "</tr>";   
                        }
                        
                    ?>
            </div>         
        </tbody>
    </table>
    <table>
        <thead>
            <div>
            <tr>
                <td>Ciudad(nombre_posición)</td> 
            
                <td>
                    
                    <?php
                    // cabecera
                            echo"Población (contenido)";    
                            echo"</td>";
                        echo "</tr>"; 
                    echo "</thead>";
                    //cuerpo de la tabla
                    //ordeno por orden alfabetico
                    asort($ciudades);
                    echo "<tbody>";
                       
                        foreach($ciudades as $ciudad => $num_habitantes){ 
                            echo"<tr>";
                            echo"<td>".$ciudad."</td>";
                            echo "<td>".$num_habitantes."</td>";
                            echo "</tr>";   
                        }
                        
                    ?>
            </div>         
        </tbody>
    </table>
 <table>
        <thead>
            <div>
            <tr>
                <td>Ciudad(nombre_posición)</td> 
            
                <td>
                    
                    <?php
                    //cabecera
                            echo"Población (contenido)";    
                            echo"</td>";
                        echo "</tr>"; 
                    echo "</thead>";
                    //cuerpo tabla
                    ksort($ciudades);
                    echo "<tbody>";
                       
                            //hago que me de el valor mas grande del array                 
                        foreach($ciudades as $ciudad => $num_habitantes){ 
                            echo"<tr>";
                            echo"<td>".$ciudad."</td>";
                            echo "<td>".$num_habitantes."</td>";
                            echo "</tr>";   
                        }
                        
                    ?>
            </div>         
        </tbody>
    </table>
     <table>
        <thead>
            <div>
            <tr>
                <td>Ciudad(nombre_posición)</td> 
            
                <td>
                    
                    <?php
                    //cabecera
                            echo"Población (contenido)";    
                            echo"</td>";
                        echo "</tr>"; 
                    echo "</thead>";
                    echo "<tbody>";
                    //cuerpo tabla
                    //ordeno por numero habitantes lo q significa que ordeno por el asociado de la clave
                    ksort($ciudades);
                    //end lleva el puntero a la ultima posicion
                    end($ciudades);
                    echo"<tr>";
                    echo"<td>".key($ciudades)."</td>";
                    echo "<td>".$num_habitantes."</td>";
                    echo "</tr>";
                    //reset lo lleva a la primera
                    reset($ciudades);
                    echo"<tr>";
                    echo"<td>".key($ciudades)."</td>";
                    //el current ,me devuelve el valor asociado a la variable
                    echo "<td>".current($ciudades)."</td>";
                    echo "</tr>";

                     
                        
                    ?>
            </div>         
        </tbody>
    </table>
</body>