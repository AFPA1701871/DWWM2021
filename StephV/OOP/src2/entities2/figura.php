<?php
//HERITAGE DES CLASSES
class Figura{
    public $lados=0;
    public $cm_por_lado=0;

    public function __construct($l,$c){
        $this->lados=$l;
        $this->cm_por_lado=$c;
    }

    public function get_area(){
        return 0;
    }

    public function get_perimetro(){
        return $this->lados*$this->cm_por_lado;
    }
}

class Cuadrado extends Figura{   //va hériter du constructeur de Figura et utilise la méthode get_area()
    public function get_area(){
        return $this->cm_por_lado*$this->cm_por_lado;
    }
}

class Pentagono extends Figura{
    public function get_area(){
        return $this->get_perimetro()*$this->get_apotema();
    }
    public function get_apotema(){
        return $this->cm_por_lado/1.45;
    }
}


$cuadrado=new Cuadrado(2,4);
$pentagono=new Pentagono(3,8);
echo $cuadrado->get_area();  //16
echo "\n";
echo $pentagono->get_area();  //66.20
?>