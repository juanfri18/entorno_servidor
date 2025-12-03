<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
<form name="tabla" method="get" action="">
    <h2>Calculador dias entre dos fechas</h2>
    <h3>Debes introducirlo cobn el siguiente formato: "aaaa-mm-dd"
</h3>
    fecha dia que pido el libro<br>
    <input name="fecha" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["fecha"])){
    $fecha=strtotime($_GET["fecha"]);
    $seg_dev=$fecha+(15*24*60*60);
    // para escribirlo ne un mensaje guapo guapo
    $dia_dev=date("d",$seg_dev);
    $dia_mes=date("F",$seg_dev);
    $dia_año=date("Y",$seg_dev);
    //fecha formateada
    $fecha_entrega=date("Y-m-d",$seg_dev);
    $fecha_hoy=time();
//calculo el el dia que tiene que delover el libro
echo"La fecha maxima en la que puedes devoler el libro es $dia_dev de $dia_mes de $dia_año <br>";
//calculo si tiene dias de retraso , fecha exacta o si es es el dia exacto
    $calculo_dias_retraso=number_format((($seg_dev-$fecha_hoy)/(24*60*60)),0);
    echo "$calculo_dias_retraso";
    if($calculo_dias_retraso>0){
        echo"te han sobrado ";
    }elseif($calculo_dias_retraso==0){
        echo "hoy es justamente la fecha de entrega";
    }else{
        $calculo_dinero=((int)$calculo_dias_retraso*(-1))*3;
        echo "tienes $calculo_dias_retraso dias de atraso con la entrega , deberas pagar $calculo_dinero euros";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Calculator</title>
</head>
<body>

<form name="tabla" method="get" action="">
    <h2>Book Return Calculator</h2>
    <h3>Format: "aaaa-mm-dd" (Ex: 2023-12-03)</h3>
    Date I borrowed the book:<br>
    <input name="fecha" type="text" placeholder="2023-12-03" required><br>
    <input name="enviar" type="submit" value="Send"><br><br>
</form>

<?php //IA
if(isset($_GET["fecha"])){
    
    // 1. Convertir la fecha introducida a timestamp
    $fecha_inicio = strtotime($_GET["fecha"]);
    
    // 2. Calcular la fecha de devolución (+15 días)
    // 15 días * 24 horas * 60 min * 60 seg
    $seg_dev = $fecha_inicio + (15 * 24 * 60 * 60);

    // Variables para mostrar la fecha (date devuelve inglés por defecto)
    $dia_dev = date("d", $seg_dev);
    $mes_dev = date("F", $seg_dev); // Ej: December
    $anio_dev = date("Y", $seg_dev);

    echo "<h3>The deadline is: $mes_dev $dia_dev, $anio_dev</h3>";

    // 3. Obtener el 'HOY' limpio (00:00:00 horas)
    // Usamos strtotime("today") en lugar de time() para evitar decimales raros
    $fecha_hoy = strtotime("today"); 

    // 4. Calcular diferencia
    $diferencia_segundos = $seg_dev - $fecha_hoy;
    
    // Convertimos a entero (intval) dividiendo entre los segundos de un día (86400)
    $dias_diferencia = intval($diferencia_segundos / 86400);

    // LÓGICA DE MENSAJES
    if($dias_diferencia > 0){
        echo "<p style='color:green'>You have <strong>$dias_diferencia</strong> days left to return the book.</p>";
    } 
    elseif($dias_diferencia == 0){
        echo "<p style='color:orange'>Today is the due date!</p>";
    } 
    else {
        // Al ser negativo, multiplicamos por -1 para mostrarlo positivo
        $dias_retraso = $dias_diferencia * -1;
        $multa = $dias_retraso * 3;
        
        echo "<p style='color:red'>You are <strong>$dias_retraso</strong> days late.</p>";
        echo "<p>You must pay a fine of: <strong>$multa euros</strong>.</p>";
    }
}
?>

</body>
</html>