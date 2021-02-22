<?php

class Personne{
    private $_nom;
    private $_prenom;
    private $_adresse;

    //constructeur
    public function __construct(string $nom, string $prenom, string $adresse){
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _adresse = $adresse;
    }

    //Getters
    public function get_nom(){
        return $this -> _nom;
    }
    public function get_prenom(){
        return $this -> _prenom;
    }
    public function get_adresse(){
        return $this -> _adresse;
    }

    //Setters
    public function set_nom($nom){
        $this -> _nom = $nom;
        return $this -> $nom;
    }
    public function set_prenom($prenom){
        $this -> _prenom = $prenom;
        return $this -> $prenom;
    }

    public function set_adresse($adresse){
        $this -> _adresse = $adresse;
        return $this -> $adresse; 
    }
    public function setAdresse($adresse){
        $this -> _adresse = $adresse;
    }

    public function getPersonne(){
        echo "Nom            : ". $this-> _nom . " \n";
        echo "Prénom est     : ". $this -> _prenom . " \n";
        echo "Adresse        : ". $this ->_adresse . "\n";
    }
    

}

?>