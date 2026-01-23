<?php
abstract class Ruta {
    protected $conductor;
    protected $vehiculo;
    protected $fecha; 
    protected $hora;
    protected $duracion;
    protected $distancia;
    protected $carga;
    protected $zonas;
    
    public static $totalRutas = 0;

    public function __construct($conductor, $vehiculo, $fecha, $hora, $duracion, $distancia, $carga, $zonas) {
        if (preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,}$/', $conductor)) {
            $this->conductor = $conductor;
        } else {
            $this->conductor = "Conductor Anonimo";
        }

        $this->vehiculo = $vehiculo;
        
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
            $this->fecha = $fecha;
        } else {
            $this->fecha = "2025-01-01"; 
        }

        $this->hora = $hora;
        $this->duracion = $duracion;
        $this->distancia = $distancia;
        $this->carga = $carga;
        $this->zonas = $zonas;

        self::$totalRutas++;
    }

    public function getConductor() { return $this->conductor; }
    public function getFecha() { return $this->fecha; }
    public function getDistancia() { return $this->distancia; }
    public function getDuracion() { return $this->duracion; }
    public function getCarga() { return $this->carga; }
    public function getZonas() { return $this->zonas; }
    public function getVehiculo() { return $this->vehiculo; }

    public function getFechaSalida() {
        $partes = explode('-', $this->fecha);
        return $partes[2] . "/" . $partes[1] . "/" . $partes[0];
    }

    public function __toString() {
        return $this->conductor . " - " . $this->vehiculo . " - " . $this->getFechaSalida() . " " . $this->hora;
    }
    
    abstract public function tipoRuta();
}
?>