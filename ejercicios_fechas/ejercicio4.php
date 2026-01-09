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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Devolución Libro</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .mensaje { padding: 10px; border: 1px solid #ccc; margin-top: 10px; background-color: #f9f9f9; }
        .rojo { color: red; font-weight: bold; }
        .verde { color: green; font-weight: bold; }
        .azul { color: blue; font-weight: bold; }
    </style>
</head>
<body>

    <form name="tabla" method="get" action="">
        <h2>Control de devolución de libros</h2>
        
        <!-- Usamos type="date" para facilitar la entrada y evitar errores de formato -->
        <label>Introduce la fecha en la que tenías que devolver el libro:</label><br>
        <input name="fecha_limite" type="date" required value="<?php echo isset($_GET['fecha_limite']) ? $_GET['fecha_limite'] : ''; ?>"><br><br>
        
        <input name="enviar" type="submit" value="Comprobar"><br><br>
    </form>

    <?php
    if (isset($_GET["fecha_limite"])) {
        
        // 1. Obtenemos las fechas
        // Fecha límite introducida por el usuario (seteada a las 00:00:00 internamente)
        $fecha_limite_str = $_GET["fecha_limite"];
        $ts_limite = strtotime($fecha_limite_str); 

        // Fecha de hoy (NORMALIZADA): Importante usar date("Y-m-d") para quitar las horas/minutos/segundos
        // y comparar solo días. Si usamos time(), la hora exacta afectaría al cálculo.
        $hoy_str = date("Y-m-d");
        $ts_hoy = strtotime($hoy_str);

        // 2. Calculamos la diferencia en segundos
        // Restamos Hoy - Limite
        $segundos_diferencia = $ts_hoy - $ts_limite;

        // 3. Convertimos a días (60 seg * 60 min * 24 horas = 86400)
        // Usamos floor o redondeo simple ya que hemos normalizado las horas a 00:00
        $dias_diferencia = $segundos_diferencia / 86400;

        echo "<div class='mensaje'>";
        echo "Fecha límite: " . date("d-m-Y", $ts_limite) . "<br>";
        echo "Fecha de hoy: " . date("d-m-Y", $ts_hoy) . "<br><br>";

        // 4. Lógica del enunciado
        if ($dias_diferencia > 0) {
            // Caso: RETRASO (Hoy es mayor que la fecha límite)
            $multa = $dias_diferencia * 3; // 3 euros por día
            echo "<span class='rojo'>El libro está devuelto con retraso.</span><br>";
            echo "Días de retraso: " . $dias_diferencia . "<br>";
            echo "Multa a pagar: " . $multa . "€";

        } elseif ($dias_diferencia == 0) {
            // Caso: DÍA EXACTO
            echo "<span class='azul'>Hoy es justamente la fecha de entrega. ¡Estás a tiempo!</span>";

        } else {
            // Caso: AÚN QUEDA TIEMPO (Diferencia negativa)
            // Usamos abs() para mostrar el número en positivo
            $dias_restantes = abs($dias_diferencia);
            echo "<span class='verde'>Todavía estás a tiempo.</span><br>";
            echo "Te sobran " . $dias_restantes . " días para devolverlo.";
        }
        echo "</div>";
    }
    ?>
</body>
</html>