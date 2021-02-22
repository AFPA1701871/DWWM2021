<?php

class Voiture{
    //Attributs
    private $_model;
    private $_marque;
    private $_immatriculation;
    private $_couleur;
    private $_vitesse = 0;
    private $_nom;

    //Constructeur
    public function __construct( string $nom, string $couleur, string $model, string $marque, string $immatriculation){
      /* $this -> _nom = $nom;
       $this -> _couleur = $couleur;
       $this -> _model = $model;
       $this -> _marque = $marque;
       $this -> _immatriculation = $immatriculation;*/
       $this -> set_nom($nom);
       $this -> set_couleur($couleur);
       $this -> set_model($model);
       $this -> set_marque($marque);
       $this -> set_immatriculation($immatriculation);

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
    public function get_vitesse(){
        return $this -> _vitesse;
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
        $rand = random_int(1,25);
        $this -> _vitesse = $this -> _vitesse + $rand;
        echo "La voiture immatriculée ". $this -> _immatriculation . " de la marque ". $this -> _marque . " , modèle : " . $this ->_model . 
        " de couleur ". $this -> _couleur . " a accéléré de " . $rand ." km/h et roule désormée à " . $this -> get_vitesse . " km/h \n";
    }
}


?>