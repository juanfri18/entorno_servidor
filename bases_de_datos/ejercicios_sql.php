<?php

$conexion=new mysqli('localhost','root','','centro');
$conexion->set_charset('utf8');

//ejercicio 1
$consulta1="select dni, nombre, edad from alumnos";
$resultado1=$conexion->query($consulta1);
while($fila=$resultado1->fetch_array(MYSQLI_ASSOC)){
    echo"<br> $fila[nombre] tienen $fila[edad] años y su dni es $fila[dni]";
}
echo "<br><br>";
//ejercicio 2
$consulta2="select codigo,nombre,creditos,trimestre from asignaturas";
$resultado2=$conexion->query($consulta2);
while($fila=$resultado2->fetch_array(MYSQLI_ASSOC)){
    echo"<br> la asigantura $fila[nombre] con codigo $fila[codigo] equivale a $fila[creditos] creditos y se imparte en el $fila[trimestre] trimestre";
}
echo "<br><br>";

//ejercicio 3 
$consulta3="select * from matriculas";
$resultado3=$conexion->query($consulta3);
while($fila=$resultado3->fetch_array(MYSQLI_ASSOC)){
    echo"<br> dni alumno $fila[dni] , codigo asignatura $fila[codigo], año $fila[año], nota $fila[nota]";
}
echo "<br><br>";

//ejercicio 4
$consulta4="select nombre,edad from alumnos where edad>22";
$resultado4=$conexion->query($consulta4);
echo "<br> nombre y edad de los alumnso mayores de 22 años";
while($fila=$resultado4->fetch_array(MYSQLI_ASSOC)){
    echo"<br> nombre: $fila[nombre]   edad: $fila[edad] ";
}
echo "<br><br>";

//ejercicio 5
$consulta5="select nombre,creditos,trimestre from asignaturas where trimestre='1'";
$resultado5=$conexion->query($consulta5);
echo "<br> asignaturas que se imparten en el primer trimestre:";
while($fila=$resultado5->fetch_array(MYSQLI_ASSOC)){
    echo"<br> nombre: $fila[nombre]   creditos: $fila[creditos] ";
}
echo "<br><br>";

//ejercicio 6
$consulta6="select dni,codigo,nota,año from matriculas where año=2020";
$resultado6=$conexion->query($consulta6);
echo "<br>  DNI del alumno, código de asignatura y nota de las matrículas correspondientes al año 2020";
while($fila=$resultado6->fetch_array(MYSQLI_ASSOC)){
    echo"<br> dni: $fila[dni]   código: $fila[codigo] nota: $fila[nota]";
}
echo "<br><br>";

//ejercicio 7
$consulta7="SELECT alumnos.dni,alumnos.nombre,asignaturas.nombre,matriculas.año,matriculas.nota FROM alumnos,asignaturas,matriculas
WHERE alumnos.dni=matriculas.dni AND asignaturas.codigo=matriculas.codigo";
$resultado7=$conexion->query($consulta7);
echo "<br>  ";
while($fila=$resultado7->fetch_array(MYSQLI_ASSOC)){
    echo"<br> dni: $fila[dni] código: $fila[codigo] nota: $fila[nota]";
}
echo "<br><br>";













$conexion->close();

?>