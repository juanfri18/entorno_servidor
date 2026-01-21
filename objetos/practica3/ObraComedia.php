<?php
require_once 'Obra.php';
class ObraComedia extends Obra{
    
    public function resumenArgumento(){
            return "Una historia ligera con situaciones humorísticas.";
        }
    public function esLarga(){
        if(($this->duracion)>=120){
            return true;
        }else{
            return false;
        }
    }
    public function publicoObjetivo(){
        return "Apto para todos los públicos.";
    }
    public function nivelProduccion(){
        $nivelProducion=count($this->personajes)*1000;
        return $nivelProducion;
    }

}

?>