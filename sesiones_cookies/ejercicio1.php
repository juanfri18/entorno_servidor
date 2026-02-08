<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST["borrar"])){
        setcookie("nombre", "", time() - 3600);
        $borrada="Cookie borrada con exito";
    }else{
        setcookie("nombre","",time()+7*24*60*60);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombreRecibido = $_POST["nombre"] ?? ""; 
            $cookieNombre=$_COOKIE["nombre"]=$nombreRecibido;
        }
    }
}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        nombre: <br>
        <input type="text" name="nombre" id=nombre><br>
        <button type="submit">Enviar</button>
        <button type="submit" name="borrar">Eliminar Cookie</button><br>
        <?php
            if (isset($cookieNombre)) {
                echo "Hola, " . $cookieNombre;
            }
            if (isset($borrada)) {
                echo $borrada;
            }
        ?>
    </form>
</body>
</html>