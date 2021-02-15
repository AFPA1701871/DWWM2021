<?php
class Joueur{
    private $_pointDeVie;

    //constructeur
    public function __construct($pointDeVie){
        $this->_pointDeVie = 50;
    
    }
    //Getters
    public function get_pointDevie(){
        return $this->_pointDeVie;
    }
    //Setters
    public function set_pointDeVie($pointDeVie){
         $this->_pointDeVie = $pointDeVie;
    }

    //Les méthodes
    public function EstVivant($nbrePointsDeVie){

    }
    public function attackJoueur(MonstreFacile $monstre){
        echo "Le joueur attaque : ";

    }
    public function SubitDegats(int $valDegatSubits){

    }

    public function joueurLanceDe(){
       
        return $tirage->LanceLeDe();
       
    }
}

?>