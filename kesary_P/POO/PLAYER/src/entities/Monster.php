<?php

class Monster extends Character{

    //Constructeur
    public function __construct($lifePoint,$strenghtPoint){
        Parent::__construct($lifePoint,$strenghtPoint);
    }

    //Méthode attaquer
    public function attack( Character $caracter, $pseudo){
        echo "Le monstre attaque $pseudo et lui inflige ". $this->get_strenghtPoint() . "points de vie \n";
        $caracter->set_lifePoint($caracter->get_lifePoint() - $this->get_strenghtPoint());
        echo "$pseudo a désormé ". $caracter->get_lifePoint() . "points de vie \n";
    }
    
}



?>