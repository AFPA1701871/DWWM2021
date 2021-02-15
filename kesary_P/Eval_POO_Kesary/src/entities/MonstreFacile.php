<?php

class MontreFacile{

    protected$_monstreEstVivant;
    protected $_valeurSort;

    //constructeur
    public function __construct($monstreEstVivant,$valeurSort){
        $this->_monstreEstVivant = $monstreEstVivant;
        $this->_valeurSort = $valeurSort;
    }
    //Getters
    public function get_monstreEstVivant(){
        return $this->_monstreEstVivant;
    }
    public function get_valeurSort(){
        return $this->_valeurSort;
    }
    //Setters
    public function set_monstreEstVivant($monstreEstVivant){
        $this->_monstreEstVivant = $monstreEstVivant;
    }
    public function set_valeurSort($valeurSort){
        $this->_valeurSort = $valeurSort;
    }

    public function monstreAttack(){

    }
    public function monstreLanceLeDe(){
        echo "Le monstre lance le dé : ";
    }


}



?>