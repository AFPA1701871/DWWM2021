<?php
 class Livret extends Compte{

    //constructeur
    public function __construct($numero, $montant){
        Parent::__construct($numero, $montant);
       
          
    }

    //Méthodes
    public function appliqueInteret(){}

 }

?>