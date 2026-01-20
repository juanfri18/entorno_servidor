<?php
require_once 'interfaz.php';
abstract class Invento implements Evaluable{

    protected $nombre;
    protected $proposito;
    protected $fechaPrototipo;
    protected $coste;
    protected $materiales=array();
    public static $totalInventos=0;

    public function __construct($nombre,$proposito,$fechaPrototipo,$coste,$materiales){
        if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$fechaPrototipo)){
            throw new Exception("Error , la fecha introducida $fechaPrototipo no es valida.");
        }
        if($coste<0){
            throw new Exception("Error ,El coste introducido $coste no puede ser menor de cero.");
        }
        $this->nombre=$nombre; 
        $this->proposito=$proposito; 
        $this->fechaPrototipo=$fechaPrototipo; 
        $this->coste=$coste;
        $this->materiales=$materiales;
        self::$totalInventos++;

    }

    public function añosDesdePrototipo(){
        $fecha_actual=new DateTime();
        $fechaPrototipo=new DateTime($this->fechaPrototipo);
        $num_años=$fechaPrototipo->diff($fecha_actual);
    return $num_años->y;
    }

    public function __toString()
    {
        $fecha_objeto=new DateTime($this->fechaPrototipo);
        $fecha_formato=$fecha_objeto->format('d-m-Y');
        $frase= "Invento: $this->nombre | Prototipo: $fecha_formato | Coste: $this->coste";
        return $frase;
    }

    public function esRentable(){
        return $rentable=($this->coste)<5000;
    }
    public abstract function impactoAmbiental();
    public abstract function descripcionTecnica();
    abstract public function calcularComplejidad();
}

?>