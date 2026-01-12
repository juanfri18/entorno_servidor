<?php
require_once 'Vehiculo.php';
require_once 'Certificable.php';

class Hidrogeno extends Vehiculo implements Certificable {
    public function calcularAutonomia() {
        return 650;
    }
    public function obtenerEtiqueta() {
        return "Etiqueta ECO - Acceso permitido a centro ciudad";
    }
}
?>