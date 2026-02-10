<?php
require_once 'interfazInfombale.php';
abstract class Ticket implements interfazInfombale {
    protected $titulo;
    protected $email;
    


    function __construct($titulo,$email){
        // Expresión regular para validar el email
        $titulo=$this->titulo;
        $email=$this->email;
        if (!preg_match("/^[a-z0-9.]+@[a-z0-9.]+\.[a-z]{2,3}$/i", $email)) {
            throw new Exception("Formato de email no válido.");
        }  
    }
    //metodo abstracto
    abstract public function getResum();
}


class Incidencia extends Ticket{
    private $prioridad;
    
    public function getResum($titulo,$prioridad){
        $titulo=$this->titulo;
        $prioridad=$this->prioridad;
        $tituloMayusculas=strtoupper($titulo);
        return "NUEVA INCIDENCIA:$tituloMayusculas [ $prioridad ]";
    }
    public function getEstilo($resuelto){
        
        $prioridad=$this->prioridad;
        if(!$resuelto && $prioridad=="alta"){
            $estilo="background-color: #ffe6e6; color: #721c24; font-weight: bold;";
        }else{
           $fondo="background-color: #d4edda; color: #155724;";
        }


    }
}
?>