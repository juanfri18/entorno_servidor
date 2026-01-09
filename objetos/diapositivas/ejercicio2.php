<?php 
class vehiculo{
    public $nombre;
    private $tipo;
    private $peso;

    public function __contruct($nombre,$tipo,$peso){
        $this->nombre=$nombre;
        $this->tipo=$tipo;
        $this->peso=$peso;
    }
    public function __get($propiedad){
        return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
        $this->$propiedad=$valor;
    }
    public function __toString(){
        $salida="el vehiculo $this->nombre es de tipo $this->tipo y pesa $this->peso toneladas. ";
        return $salida;
    }
}
?>