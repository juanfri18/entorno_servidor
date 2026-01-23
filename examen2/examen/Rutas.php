<?php
require_once 'analizable.php';
abstract class Rutas {
    public $conductor ;
    public $vehiculoUtilizado ;
    public $fecha ;
    public $hora;
    public $duracion ;
    public $distancia ;
    public $cargaTransportada;
    public $zonasVisitadas;

    static public $numeroRutas=0;

    //esto no se que es aun
    public abstract function tipoRuta();

    public function __construct($conductor,$vehiculoUtilizado,$fecha,$hora,$duracion,$distancia,$cargaTransportada,$zonasVisitadas){
        
        $this->conductor=$conductor;
        $this->vehiculoUtilizado=$vehiculoUtilizado;
        $this->fecha=$fecha;
        $this->hora=$hora;
        $this->duracion=$duracion;
        $this->distancia= $distancia;
        $this->cargaTransportada=$cargaTransportada;
        $this->zonasVisitadas=$zonasVisitadas;
        if(!preg_match('/^[a-zA-z ]{3,}$/',$conductor)){
            $conductor="nombre no legible";
        }
        if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2} $/',$fecha)){
            $fecha=time();
        }
        self::$numeroRutas++;
    }
    public function getter($nombre){
      return $this->$nombre;
    }
    public function setter($nombre, $valor){
        $this->$nombre=$valor;
    }

    public function __toString(){
        $conductor=$this->conductor;
        $vehiculoUtilizado=$this->vehiculoUtilizado;
        $fecha=$this->fecha;
        $fechaFormateada=date('d/m/Y H:i',$fecha);
        $frase="$conductor-$vehiculoUtilizado-$fechaFormateada";
        return $frase;
    }
}

?>