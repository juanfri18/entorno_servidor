<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="tabla" method="post" action="resultado.php">
        <textarea name="datos_raw" id="datos_raw" placeholder="EL| bcn-1010x |Furgoneta Reparto|2019-05-10|15000#HI|mad2020y | Camion Logistica|2023-11-02|5500" required></textarea>
        <br><br>km minimos<br>
        <input name="minimo" type="text" placeholder="km Minimos"><br>
        km maximos<br>
        <input name="maximo" type="text" placeholder="km Maximos"><br>
        
        <label type="checkbox" name="extras[]" value="GPS"></label><br>
        <label type="checkbox" name="extras[]" value="Sensor de carril"></label><br>
        <label type="checkbox" name="extras[]" value="Cámara 360"></label><br>
        <label type="checkbox" name="extras[]" value="ABS"></label><br>
        <input type="submit" value="Enviar"><br><br>
    </form>

</body>
</html>