<?php
require_once 'Ruta.php'; 
require_once 'analizable.php';

class RutaUrbana extends Ruta implements Analizable {
    
    private $pasaPorCentro; 

    public function __construct($conductor, $vehiculo, $fecha, $hora, $duracion, $distancia, $carga, $zonas, $pasaPorCentro) {
        parent::__construct($conductor, $vehiculo, $fecha, $hora, $duracion, $distancia, $carga, $zonas);
        $this->pasaPorCentro = $pasaPorCentro;
    }

    public function calcularEficiencia() {
        if ($this->duracion == 0) return 0;
        
        $eficiencia = ($this->distancia / $this->duracion) * 100;

        if (in_array("Centro", $this->zonas)) {
            $eficiencia = $eficiencia * 0.90; 
        }

        return round($eficiencia, 2);
    }

    public function nivelImpacto() {
        $puntos = 2;
        
        if ($this->carga > 70) $puntos += 2;
        if ($this->distancia > 15) $puntos += 2;
        
        return $puntos;
    }

    public function tipoRuta() {
        return "Urbana";
    }
}
?>