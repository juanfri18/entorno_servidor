<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="post" enctype="multipart/form-data">
    Sube tu foto: <input type="file" name="foto">
    <input type="submit" value="Enviar">
</body>
</html>


</form>
<?php
//IMPORTANTE!!!
// enctype="multipart/form-data"
?>