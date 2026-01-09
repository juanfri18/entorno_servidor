<?php 

class Animal{
    public $nombre;
    public $color;
    public $fecha_nac;


    public function __set($propiedad,$valor){
        $this->$propiedad=$valor;
    }
    public function __toString(){
        $salida="Este animal es un/una $this->nombre de color $this->color con una fecha de naciemiento de $this->fecha_nac , la edad es {$this->devuelveEdad()} años.";
        return $salida;
    }
    public function devuelveEdad(){
        $fecha_segundos=strtotime($this->fecha_nac);
        $fecha_hoy=time();
        $diferencia_seg=$fecha_hoy-$fecha_segundos;
        $edad=number_format($diferencia_seg/(60*60*24*365),2);
        return $edad;
    }


}

?>