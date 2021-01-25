<?php
class voiture
{
    private $_color = "white";
    private $_marque = "renault";
    private $_modele = "twingo";
    private $_immatricule =("123-lkj-246") ;

    //*********************/fonction/*********************/
    public function changecouleur(string $couleur){
        echo " ma nouvelle couleur est $couleur ";}
        public function changemarque(string $marque){
            echo " ma  marque est $marque ";}
            public function changemodele(string $modele){
                echo " le modele est $modele ";}
                public function changeimatricule(string $immatricule){
                echo " l'immatriculation est $immatricule ";}
    
    
}
?>