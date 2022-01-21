<?php
//Se puede cambiar el tipo de dato de una variables.
//Se crea una nueva clase
//Declaracion de variables
//$nombreVariable

class Vehiculo{
    public $numero_de_llantas;
    private $kilometraje;

    //constructor se ejecuta al instanciar un objeto.
    public function __construct(){
        $this->inicializarKilometraje();
    }


    public function getKilometraje(){
        return $this->kilometraje;
    }

    //Private **
    private function inicializarKilometraje(){

        $this->kilometraje = 0;
    }

    //Protegido ** se accede desde las clases que los estan heredando.
    protected function setKilometraje($km){
        $this->kilometraje = $this->kilometraje + $km;
        return  $this->kilometraje;
    }
}

$auto = new Vehiculo();
$auto->numero_de_llantas = 4;
echo 'Numero de llantas: '.$auto->numero_de_llantas;
echo '<br/>';
echo 'El kilometraje es: '.$auto->getKilometraje().' y soy feliz';

//Clase auto hereda vehiculo.
class Auto extends Vehiculo{

    public $marca = 'N/A';
    public $anio = 'N/A';
    public $color = 'N/A';

    function setPropiedades($marcaP, $anioP, $colorP){
        $this->marca = $marcaP;
        $this->anio = $anioP;
        $this->color = $colorP;

    }

    function avanzar($km){
        return $this->setKilometraje($km);
    }
}

?>