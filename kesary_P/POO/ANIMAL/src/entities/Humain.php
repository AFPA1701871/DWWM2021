<?php

abstract class Humain implements iDeplacement{
    protected $_nom;

    //Constructeur
    public function __construct($nom){
        $this->_nom = $nom;

    }

    //Getter
    public function get_nom(){
        return $this->_nom;
    }
    public function set_nom($nom){
        $this->_nom = $nom;
    }

    //Méthode 
    public function seDeplacer(){

    }
    

}

?>