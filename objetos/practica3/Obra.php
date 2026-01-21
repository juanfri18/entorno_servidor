<?php
require_once 'Dramaturgico.php';
abstract class Obra implements Dramaturgico {
    //defino los atributos de la clase
    protected $titulo;
    protected $genero;
    protected $duracion;
    protected $fechaEstreno;
    protected $personajes=array();
    public static $totalObras=0;

    // declaro las clases necesarias que me pide la interfaz
    public abstract function resumenArgumento();
    public abstract function esLarga();
    public abstract function publicoObjetivo();

    //metodos
    public function __construct($titulo,$genero,$duracion,$fechaEstreno,$personajes){
        if(!preg_match('/^[0-9]{2}-[0-9]{2}-[0-9]{4}$/',$fechaEstreno)){
            throw new Exception("la fecha introducido no es correcta, debe tener un formato: DD-MM-AAAA ");
        }
        if($duracion<=0){
            throw new Exception("la duracion no puede ser menor o igual a cero ");
        }
        $this->titulo=$titulo;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->fechaEstreno=$fechaEstreno;
        $this->personajes=$personajes;
        self::$totalObras++;
    }

    public function diaHastaEstreno(){
        $fecha_hoy=new DateTime();
        $fechaEstreno=new DateTime($this->fechaEstreno);
        $diferenciaFechas=$fecha_hoy->diff($fechaEstreno);
    }
}

?>