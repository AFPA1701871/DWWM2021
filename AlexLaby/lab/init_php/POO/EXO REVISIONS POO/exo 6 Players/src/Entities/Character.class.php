<?php

abstract class Character{
    //Attributs
    protected $_lifepoint;
    protected $strenghtPoint;

    //GETTERs et SETTERs
    public function get_lifepoint(){
        return $this->_lifepoint;
    }

    public function set_lifepoint(int $lifepoint){
        $this->_lifepoint = $lifepoint;
    }

    public function get_strenghtPoint(){
        return $this->_strenghtPoint;
    }
    public function set_strenghtPoint(int $strenghtPoint){
        $this->_strenghtPoint = $strenghtPoint;
    }

    //Constructeur
    public function __construct($lifepoint,$strenghtPoint){
        $this->set_lifepoint($lifepoint);
        $this->set_strenghtPoint($strenghtPoint);
    }

    //fonction pour attaquer
    abstract public function attack(Character $Character,$inputPseudo);
}


?>