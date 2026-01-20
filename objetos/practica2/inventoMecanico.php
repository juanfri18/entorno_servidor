<?php
require_once 'Invento.php';

class InventoMecanico extends Invento{
    public function calcularComplejidad() {
        return count($this->materiales) * 2;
    }
    public function impactoAmbiental(){
        return count($this->materiales) * 5;
    }
    public function descripcionTecnica(){
        return "Sistema mecánico basado en engranajes y piezas móviles.";
    }
}
?>