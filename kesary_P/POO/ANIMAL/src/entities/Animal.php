<?php

abstract class Animal implements iDeplacement{
    protected $_couleur;
    protected $_nombrePattes;

    //Constructeur
    public function __construct($couleur,$nombrePattes){
        $this->_couleur = $couleur;
        $this->_nombrePattes = $nombrePattes;
    }

    //Getters
    public function get_couleur(){
        return $this->_couleur;
    }
    public function get_nombrePattes(){
        return $this->_nombrePattes;
    }
    //Setters
    public function set_couleur($couleur){
        $this->_couleur = $couleur;
    }
    public function set_nombrePattes($nombrePattes){
        $this->_nombrePattes = $nombrePattes;
    }

    //Méthodes
    abstract public function crier();
    abstract function seDeplacer();

}

?>