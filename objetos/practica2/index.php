<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form name="datosObjeto" action="resultado.php" method="post">
    Nombre:<input type="text" name="Nombre"><br>
    Proposito:<input type="text" name="Proposito"><br>
    Fecha del prototipo:<input type="text" name="fechaPrototipo"><br>
    Coste:<input type="text" name="coste"><br>
    <select name="tipo" id="tipo">
        <option value="mecanico">Invento Mecánico</option>
        <option value="electronico">Invento Electrónico</option>
    </select><br>
    acero <input type="checkbox" name="materiales[]" value="acero"><br>
    aluminio <input type="checkbox" name="materiales[]" value="aluminio"><br>
    plástico <input type="checkbox" name="materiales[]" value="plástico"><br>
    madera <input type="checkbox" name="materiales[]" value="madera"><br>
    cobre <input type="checkbox" name="materiales[]" value="cobre"><br>
    silicio <input type="checkbox" name="materiales[]" value="silicio"><br>
    vidrio <input type="checkbox" name="materiales[]" value="vidrio"><br>
    fibra de carbono <input type="checkbox" name="materiales[]" value="fibra de carbono"><br>
    goma <input type="checkbox" name="materiales[]" value="goma"><br>
    cerámica <input type="checkbox" name="materiales[]" value="cerámica"><br>
    <input type="submit" value="enviar">

</form>
</body>
</html>
