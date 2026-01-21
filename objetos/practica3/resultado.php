<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $datos=$_POST['Datos'];
    $textoLimpio = str_replace("\r\n", "\n", $datos);    
    $arrayDatos=explode("\n\n",$textoLimpio);
    foreach($arrayDatos as $objeto){
        $objetoRecorrer=explode("\n",$objeto);
        $tipo = strtoupper(trim($lineas[0]));
        $titulo = trim($lineas[1]); 
        $fecha = trim($lineas[2]);     
        $duracion = trim($lineas[3]);  
        $actores = trim($lineas[4]); 
        try{
            if($tipo=='COMEDIA'){

            }elseif($tipo=='DRAMA'){

            }
        }catch(Exception $e){
            $error = $e->getMessage();

        }
    }

    ?>
</body>
</html>
