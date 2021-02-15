<?php
abstract class Animal implements seDeplacer
{
    protected $color;
    protected $nbPaws;

    public function __construct(string $color,int $nbPaws){
        $this->set_color=$color;
        $this->set_nbPaws=$nbPaws;
    }

    public function get_color(){
        return $this->_color;
    }
    public function get_nbPaws(){
        return $this->_nbPaws;
    }

    public function setColor($color){
        $this->color=$color;
    }
    public function setNbPaws($nbPaws){
            $this->nbPaws=$nbPaws;
    }

    abstract function crier();

    public function seDeplacer(){
        echo " bondit sur ses 4 pattes ";
    }
}   


?>