<?php
abstract class Animal implements seDeplacer
{
    protected $_color;
    protected $_nbPaws;

    public function __construct(string $color,int $nbPaws){
        $this->_color=$color;
        $this->_nbPaws=$nbPaws;
    }

    public function getColor(){
        return $this->_color;
    }
    public function getNbPaws(){
        return $this->_nbPaws;
    }

    public function setColor($color){
        $this->_color=$color;
    }
    public function setNbPaws($nbPaws){
            $this->_nbPaws=$nbPaws;
    }

    abstract function crier();

    public function seDeplacer(){
        echo " bondit sur ses ".$this->getNbPaws()." pattes\n";
    }
}   


?>