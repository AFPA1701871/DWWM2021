<?php
//LES CLASSES
class Casa{
public $anchura=0;
public $longitud=0;

public function __construct($a,$l){
    $this->anchura=$a;
    $this->longitud=$l;
}
public function get_area(){
    return ($this->anchura*$this->longitud)."m2";
}
}

$casa_peque=new Casa(10,5);
echo $casa_peque->get_area(); //50m2

$casa_grande=new Casa(10,50);
echo $casa_grande->get_area(); //500m2

$casa_grande->anchura=100;
echo $casa_grande->get_area(); //5000m2


//VISIBILITE
//PUBLIC: se puede usar desde dentro y fuera de la clase
//PROTECTED:se puede usar desde dentro de la clase y subclases
//PRIVATE: solo se puede usar desde la misma clase
class Automobil{
    public $tipo_de_gasolina;  
    protected $motor;
    private $transmission;
}
class Coche extends Automobil{
    public function get_motor(){
        return $this->motor;  //correcto, motor es protected
    }
    public function get_transmission(){
        return $this->transmission; //error fatal () Need getter 
    }
}

$coche=new Coche();
$cache->tipo_de_gasolina; //correcto
$coche->transmission; //error fatal (private) 
$coche->motor;  //error fatal (protected)
?>