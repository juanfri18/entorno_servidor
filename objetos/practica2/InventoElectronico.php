<?php
require_once 'Invento.php';

class InventoElectronico extends Invento{
    public function calcularComplejidad() {
        return count($this->materiales) * 2;
    }
    public function impactoAmbiental(){
        return count($this->materiales) * 5;
    }
    public function descripcionTecnica(){
        return "Circuitería avanzada con componentes electrónicos.";
    }
}
?>