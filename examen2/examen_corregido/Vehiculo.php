<?php
class Vehiculo {
    private $marca;
    private $modelo;
    private $matricula;

    public function __construct($marca, $modelo, $matricula) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        if (preg_match('/^[0-9]{4} [A-Z]{3}$/', $matricula)) {
            $this->matricula = $matricula;
        } else {
            $this->matricula = "0000 XXX";
        }
    }

    public function __toString() {
        return "$this->marca $this->modelo ($this->matricula)";
    }
}
?>