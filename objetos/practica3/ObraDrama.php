<?php
require_once 'Obra.php';
class ObraDrama extends Obra{
    
    public function resumenArgumento(){
            return "Relato intenso cargado de emociones.";
        }
    public function esLarga(){
        if(($this->duracion)>=120){
            return true;
        }else{
            return false;
        }
    }
    public function publicoObjetivo(){
        return "Adultos y jóvenes.";
    }
    public function nivelProduccion(){
        $nivelProducion=count($this->personajes)*1500;
        return $nivelProducion;
    }

}

?>