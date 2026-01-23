<?php

    class Vehiculo{
        protected $marca;
        protected $modelo;
        protected $matricula;

        public function __construct($marca, $modelo,$matricula){
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->matricula=$matricula;
            if(!preg_match('/^[0-9]{4} [A-Z]{3}$/',$matricula)){
                $matricula="0000 XXX";
                $this->matricula=$matricula;
            }
        }
    }

?>