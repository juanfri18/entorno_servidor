<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoTrans Auditoría</title>
</head>
<body>
    <form name="tabla" method="post" action="resultado.php">
        
        <textarea name="datos_raw" id="datos_raw" rows="5" cols="50" placeholder="EL| bcn-1010x |Furgoneta Reparto|2019-05-10|15000#HI|mad2020y | Camion Logistica|2023-11-02|5500" required></textarea>
        <br><br>

        km minimos<br>
        <input name="km_min" type="number" placeholder="km Minimos"><br>
        
        km maximos<br>
        <input name="km_max" type="number" placeholder="km Maximos"><br>
        <br>
        
        Extras:<br>
        <input type="checkbox" name="extras[]" value="GPS"> GPS<br>
        
        <input type="checkbox" name="extras[]" value="Sensor de carril"> Sensor de carril<br>
        
        <input type="checkbox" name="extras[]" value="Cámara 360"> Cámara 360<br>
        
        <input type="checkbox" name="extras[]" value="ABS"> ABS<br>
        
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>