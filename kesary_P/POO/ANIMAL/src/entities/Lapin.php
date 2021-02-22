<?php

class Lapin extends Animal{
    public $_enVie;

    public function __construct($couleur,$nombrePattes){
        Parent::__construct($couleur,$nombrePattes);
        $this->_enVie = true;
    }

    //Getters
    public function get_enVie(){
        return $this->_enVie;
    }
    //Setters
    public function set_enVie($enVie){
        $this->_enVie = $enVie;
    }

    //Méthodes
    public function seNourrir(){
        echo "Le lapin mange des carottes !!\n";
    }
    public function crier(){
        echo "Le lapin glapie de peur \n";
    }
    public function fuir(){
        $this->seDeplacer();

    }
    public function seDeplacer(){
        echo "Le lapin ". $this->_couleur . " s'enfuie sur ses ". $this->_nombrePattes . " pattes d'un seul bond \n";
    }



}

?>