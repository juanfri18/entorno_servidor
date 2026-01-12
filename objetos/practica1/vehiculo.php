<?php
abstract class Vehiculo{
    private $id;
    protected $nombre;
    protected $fechaAdquisicion;
    protected $kilometraje;
    protected $extras;
    public static $contador=0;


    public static function formatearCodigo($cadena){
        $cadenaFinal=strtoupper((str_replace(" ","",$cadena)));
        return $cadenaFinal;
    }

    public function calcularSalud(){
        $salud=100;
        $fechaAdquisicion=new DateTime($this->fechaAdquisicion);
        $fecha_hoy=new DateTime();
        $edad=$fecha_hoy->diff($fechaAdquisicion);
        if(($edad->y)>5){
            $salud=$salud-25;
        }
        if($this->kilometraje>20000){
            $salud=$salud-25;
        }
        return $salud;
    }

    public function __construct($id,$nombre,$fechaAdquisicion,$kilometraje,$extras){

        $idFormateado=self::formatearCodigo($id);
        $comprobacionId=preg_match('/^[A-Z]{3}-[0-9]{4}[A-Z]$/',$idFormateado);
        $comprobacionFecha=preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$fechaAdquisicion);
        if($comprobacionId && $comprobacionFecha){
            $this->id =$idFormateado;
            $this->nombre = $nombre;
            $this->fechaAdquisicion = $fechaAdquisicion;
            $this->kilometraje = $kilometraje;
            $this->extras = $extras;
            self::$contador++;
        }else{
            throw new Exception("El id o la fecha que has introducido no son validos");
        }
    } 

    abstract public function calcularAutonomia();

    public function __toString(){
        $fecha=new DateTime($this->fechaAdquisicion);
        $fecha_formateada=$fecha->format('d/m/Y');
        if(!empty($this->extras)){
            $lista_extras = implode(", ",$this->extras);
        } else {
            $lista_extras = "Ninguno";
        }
        $frase="$this->nombre (ID: $this->id) | Adquirido: $fecha_formateada | Extras:$lista_extras .";
        return $frase;
    }

}


?>