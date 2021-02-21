<?php
require("iFonctions.php");
class Poisson extends  Animal implements parler{

    private $_vivantEnMer;

    public function __construc($couleur,$poids, $vivantEnMer){
        Parent::__construct($couleur,$poids);
        $this -> _vivantEnMer = $_vivantEnMer;
    }

    public function get_vivantEnMer(){
        return $this -> _vivantEnMer; 
    }

    public function set_vivantEnMer(){
        $this -> $_vivantEnMer;
    }

    public function nager(){
        echo "Je nage dans l'océan et ";
    }

    public function manger(){
        echo " je mange des crevettes \n";
    }
    public function crier(){
        echo "je ne crie pas";
    }



}
?>