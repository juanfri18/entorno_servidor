<!DOCTYPE html>
<html lang="es">
<head><title>Ejercicio 4: Mascotas</title></head>
<body>
    <form action="#" method="post">
        <h3>Datos Perro</h3>
        Nombre: <input type="text" name="p_nombre"><br>
        Raza: <input type="text" name="p_raza"><br>
        Acción: <select name="p_accion">
            <option value="ladrar">Ladrar</option>
            <option value="dormir">Dormir</option>
        </select>

        <h3>Datos Delfín</h3>
        Nombre: <input type="text" name="d_nombre"><br>
        Longitud: <input type="text" name="d_longitud"><br>
        Acción: <select name="d_accion">
            <option value="saltar">Saltar</option>
            <option value="comer">Comer</option>
        </select>

        <br><br><input type="submit" name="crear_mascotas" value="Ver Mascotas">
    </form>

    <?php
    if (isset($_POST['crear_mascotas'])) {
        require_once 'clases_mascotas.php';

        // 1. Crear y configurar Perro
        $perro = new Perro();
        $perro->nombre = $_POST['p_nombre'];
        $perro->raza = $_POST['p_raza'];
        $perro->fecha_nac = "2020-01-01"; // Fecha por defecto para que no falle el cálculo de edad
        $perro->color = "Marrón"; // Valor por defecto

        echo "<hr>INFO PERRO: $perro";
        
        // Ejecutar acción del perro
        if ($_POST['p_accion'] == 'ladrar') echo $perro->ladrar();
        else echo $perro->dormir();

        // 2. Crear y configurar Delfín
        $delfin = new Delfin();
        $delfin->nombre = $_POST['d_nombre'];
        $delfin->longitud = $_POST['d_longitud'];
        $delfin->fecha_nac = "2018-05-20"; // Fecha por defecto
        $delfin->color = "Gris";

        echo "<hr>INFO DELFÍN: $delfin";
        
        // Ejecutar acción del delfín
        if ($_POST['d_accion'] == 'saltar') echo $delfin->saltar();
        else echo $delfin->comer();
    }
    ?>
</body>
</html>