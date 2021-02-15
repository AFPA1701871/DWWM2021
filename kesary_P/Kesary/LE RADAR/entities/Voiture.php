<?php

class Voiture{
    //Attributs
    public $_model;
    public $_marque;
    public $_immatriculation;
    public $_couleur;
    public $_vitesseDemarage = 15;
    public $_vitesseAccelerer = 20;
    private $_nom;

    //Constructeur
    public function __construct($nom,$couleur, $model,$marque,$immatriculation){
       $this -> _nom = $nom;
       $this -> _couleur = $couleur;
       $this -> _model = $model;
       $this -> _marque = $marque;
       $this -> _immatriculation = $immatriculation;

    }

    //Liste des getters
    public function get_nom(){
        return $this-> _nom;
    }

    public function get_model(){
        return $this -> _model;
    }

    public function get_marque(){
        return $this -> _marque;
    }

    public function get_immatriculation(){
        return $this -> _immatriculation;
    }

    public function get_couleur(){
        return $this -> _couleur;
    }

    //Liste des setters
    public function set_nom($_nom){
            $this -> _nom = $_nom;  
    }

    public function set_model($_model){
        $this -> _model = $_model;
    }

    public function set_marque($_marque){
        $this -> _marque = $_marque;
    }

    public function set_immatriculation(){
        $this -> _immatriculation = $_immatriculation;
    }

    public function set_couleur(){
        $this -> _couleur = $_couleur;
    }

    //Méthodes
    public function demarrer(){
        //echo "Démarrage de la voiture \n";
         $this -> vitesseDemarrage;

    }

    public function accelerer(){

    }



}


?>