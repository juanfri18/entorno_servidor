<!DOCTYPE html>
<html lang="es">
<head><title>Ejercicio 3: Comparar Vehículos</title></head>
<body>
    <form action="#" method="post">
        <h3>Vehículo 1</h3>
        Nombre: <input type="text" name="nom1"><br>
        Peso (t): <input type="text" name="peso1"><br>
        Tipo: 
        <select name="tipo1">
            <option value="C">Camión</option>
            <option value="M">Moto</option>
            <option value="T">Turismo</option>
        </select>
        
        <h3>Vehículo 2</h3>
        Nombre: <input type="text" name="nom2"><br>
        Peso (t): <input type="text" name="peso2"><br>
        Tipo: 
        <select name="tipo2">
            <option value="C">Camión</option>
            <option value="M">Moto</option>
            <option value="T">Turismo</option>
        </select>
        <br><br>
        <input type="submit" name="comparar" value="Comparar">
    </form>

    <?php
    if (isset($_POST['comparar'])) {
        require_once 'ejercicio2.php';

        // Creamos los dos objetos usando el constructor
        $v1 = new Vehiculo($_POST['nom1'], $_POST['tipo1'], $_POST['peso1']);
        $v2 = new Vehiculo($_POST['nom2'], $_POST['tipo2'], $_POST['peso2']);

        echo "<hr>Datos: <br>1: $v1 <br>2: $v2 <br><br><b>Resultado:</b> ";

        // Lógica de comparación
        if ($v1->get('tipo') != $v2->get('tipo')) {
            echo "No se pueden comparar, son de distinto tipo.";
        } else {
            // Son del mismo tipo, comparamos peso
            if ($v1->get('peso') > $v2->get('peso')) {
                echo "El vehículo 1 pesa más.";
            } elseif ($v2->get('peso') > $v1->get('peso')) {
                echo "El vehículo 2 pesa más.";
            } else {
                echo "Ambos pesan lo mismo.";
            }
        }
    }
    ?>
</body>
</html>