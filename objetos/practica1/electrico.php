<?php
require_once 'Vehiculo.php';
require_once 'Certificable.php';

class Electrico extends Vehiculo implements Certificable {
    public function calcularAutonomia() {
        return 400;
    }

    public function obtenerEtiqueta() {
        return "Etiqueta 0 Emisiones - Exento de restricciones";
    }
}
?>