<?php

class Chasseur extends Humain{
    private $_arme;

    //constructeur
    public function __construct(string $nom, string $arme){
        Parent ::__construct($nom);
        $this->_arme = $arme;
    }

    //Getter
    public function get_arme(){
        return $this->_arme;
    }

    //Setters
    public function set_arme( string $arme){
        $this->_arme = $arme;
    }

    //Méthodes
    public function chasser(Lapin $lapin){
        $chasse =(rand(1,6));
        if($chasse == 1 || $chasse == 6){
            echo $this->get_nom(). " tire sur le lapin avec son ". $this->get_arme(). " est....le touche\n";
            echo "Le pauvre petit lapin ". $lapin->get_couleur(). " est malheureusement mort\n";
            $lapin->set_enVie(false);
        }else {
            echo $this->get_nom(). " tire sur le lapin avec son ". $this->get_arme(). " est le rate\n";
            $lapin->fuir();
        }

    }
    public function seDeplacer(){
        echo $this->_nom ." avance avec son ". $this->_arme. "\n";
    }

}

?>