<?php

class Ville{

    private $_nom;
    private $_departement;

    //constructeur
    public function __construct($nom, $departement){
        $this -> nom = $nom;
        $this -> departement = $departement;
    }

    public function affichage(){
        
        $message = "La ville de ". $this ->nom . " est dans le département : ". $this -> departement . "\n";
         return $message;

    }

    
    
}

?>