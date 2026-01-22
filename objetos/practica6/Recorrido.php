<?php
require_once 'Recorrido.php';
abstract class Recorrido implements Recorrido{
    protected $nombre;
    protected $distancia;
    protected $tiempo;
    protected $fecha;
    protected $superficies=array();
    protected $sensaciones=array();
    public static $totalRecorridos=0;


    public function __construct($nombre,$distancia,$tiempo,$fecha,$superficies,$sensaciones){
        if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$fecha)){
            throw new Exception("fecha introducida incorrecta");
        }
        if($distancia<0){
            throw new Exception("La distnacia no puede ser cero");
        }
        if($tiempo<0){
            throw new Exception("el timepo no puede ser menor a cero");
        }
        $this->nombre=$nombre;
        $this->tiempo=$tiempo;
        $this->distancia=$distancia;
        $this->fecha=$fecha;
        $this->superficies=$superficies;
        $this->sensaciones=$sensaciones;
        self::$totalRecorridos++;
    }
    public function ritmo(){
        $tiempo=$this->tiempo;
        $distancia=$this->distancia;
        $velocidadMedia=$tiempo/$distancia;
        return $velocidadMedia;
    }
    public function velocidadMedia(){
         
    }
}

?>