<?php

abstract class Character{
    protected $_lifePoint;
    protected $_strenghtPoint;

    public function __construct($lifePoint,$strenghtPoint){
        //$this->_lifePoint = $lifePoint;
        //$this->_strenghtPoint = $strenghtPoint;
        $this->set_lifePoint($lifePoint);
        $this->set_strenghtPoint($strenghtPoint);
    }

    //Getters
    public function get_lifePoint(){
        return $this->_lifePoint;
    }
    public function get_strenghtPoint(){
        return $this->_strenghtPoint;
    }
    //Setters
    public function set_strenghtPoint($strenghtPoint){
        return$this->_strenghtPoint = $strenghtPoint;
    }
    public function set_lifePoint($lifePoint){
        return $this->_lifePoint = $lifePoint;
    }
    /*
    public function __toString(){
        $affichage = "Point de vie : ". $this->_lifePoint. "\n";
        $affichage .= "Force        : ". $this->_strenghtPoint. "\n";
        return $affichage;
    }*/

    //Méthode pour attaquer
    abstract public function attack(Character $caracter, $pseudo);
}


?>