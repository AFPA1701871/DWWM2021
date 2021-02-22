<?php
class Lapin extends Animal
{
    private $_enVie;

    public function __construct(){  
        Parent::__construct("blanc",4);
        $this->_enVie=true;
    }

    public function getEnVie(){
        return $this->_enVie;
    }
    public function setEnVie($enVie){
        $this->_enVie=$enVie;
    }

    public function crier(){
        echo "le lapin ".$this->getColor()." crie \n";
    }
    public function seNourrir(){
        echo "la lapin ".$this->getColor()." est en train de se nourrir.\n";
    }
    public function fuir(){
        echo "le lapin ".$this->getColor();
        echo $this->seDeplacer()." et se sauve...\n";
        
    }
    public function dies(){
        echo "le tue\n";
        echo "Le petit lapin est mort\n";
        exit;
    }


}
?>