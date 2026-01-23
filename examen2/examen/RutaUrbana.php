<?php
require_once 'Rutas.php';
class RutaUrbana extends Rutas implements analizable{
    public $pasacentro;
    public  function calcularEficiencia(){
        $eficiencia=(($this->distancia)/($this->duracion))*100;
        $zonasVisitadas=$this->zonasVisitadas;
        if(in_array("centro",$zonasVisitadas)){
            $eficiencia=$eficiencia*0.1;
        }
        return $eficiencia;
    }
    public  function nivelImpacto(){
        $impacto=2;
        if(($this->cargaTransportada)>70){
            $impacto=$impacto+2;
        }
        if(($this->distancia)>15){
            $impacto=$impacto+2;
        }
        return $impacto;
    }
    public  function tipoRuta(){
        return "Urbana";
    }

    public function __construct($conductor, $vehiculoUtilizado, $fecha, $hora, $duracion, $distancia, $cargaTransportada, $zonasVisitadas,$pasacentro)
    {
        parent::setter("pasacentro",$pasacentro=$this->pasacentro);
        return parent::__construct($conductor, $vehiculoUtilizado, $fecha, $hora, $duracion, $distancia, $cargaTransportada, $zonasVisitadas);
    }
}

?>