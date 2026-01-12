<?php
class Vehiculo {
    private $nombre;
    private $tipo;
    private $peso;

    public function __construct($n, $t, $p) {
        $this->nombre = $n;
        $this->tipo = $t;
        $this->peso = $p;
    }

    public function get($propiedad) {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    public function __toString() {
        switch ($this->tipo) {
            case 'C': $tipoTexto = "Camión"; break;
            case 'M': $tipoTexto = "Moto"; break;
            case 'T': $tipoTexto = "Turismo"; break;
            default:  $tipoTexto = "Desconocido"; break;
        }
        return "Vehículo: $this->nombre | Tipo: $tipoTexto | Peso: $this->peso toneladas.";
    }
}
?>