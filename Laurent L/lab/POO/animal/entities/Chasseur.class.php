<?php
    class Chasseur extends Humain{

        private $_arme;

        public function __construct($nom, $arme){
            parent::__construct($nom);
            $this->set_arme($arme);
            echo "\nLe chasseur ".$this->get_nom()." a été créé avec un ".$this->get_arme().".";
        }

        public function chasser(Lapin $lapin){
            $tirageAleatoire = random_int(1,6);
            if($tirageAleatoire == 1 || $tirageAleatoire == 6){
                echo "\n".$this->get_nom()." tire sur le lapin avec son ".$this->get_arme()." est… le touche";
                echo "\nLe pauvre petit lapin ".$lapin->get_couleur()." est malheureusement mort.";
                $lapin->set_enVie(false);
            }else{
                echo "\n".$this->get_nom()." tire sur le lapin avec son ".$this->get_arme()." est… le rate ";
                $lapin->fuir();
            }

        }

        public function seDeplacer(){
            echo "\n".$this->get_nom()." avance avec son ".$this->get_arme().".";
        }


        // get et set

        public function get_arme(){
            return $this->_arme;
        }

        public function set_arme($arme){
            $this->_arme = $arme;
        }


    }


?>