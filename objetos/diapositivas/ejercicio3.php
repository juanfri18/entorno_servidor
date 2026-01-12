<?php
require_once 'ejercicio1.php'; 

class Perro extends Animal {
    public $raza;
    public $sexo;

    public function ladrar() {
        return "<br>$this->nombre dice: ¡GUAU!";
    }

    public function dormir() {
        return "<br>$this->nombre se ha dormido Zzz...";
    }

    public function __toString() {
        return parent::__toString() . " Raza: $this->raza, Sexo: $this->sexo.";
    }
}

class Delfin extends Animal {
    public $longitud;

    public function saltar() {
        return "<br>$this->nombre está saltando por los aires!";
    }

    public function comer() {
        return "<br>$this->nombre tiene hambre y come pescado.";
    }

    public function __toString() {
        return parent::__toString() . " Longitud: $this->longitud cm.";
    }
}
?>