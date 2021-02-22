<?php

    Class MonstreFacile extends De{
        //Attributs
        protected $_vivant;
        protected $_nom;

        //Getters et setters
        public function get_vivant(){
            return $this->_vivant;
        }
        public function set_vivant(bool $vivant){
            $this->_vivant = $vivant;
        }

        public function get_nom(){
            return $this->_nom;
        }
        public function set_nom(string $nom){
            $this->_nom = $nom;
        }

        //Constructeur
        public function __construct($vivant,$nom){
            $this->set_vivant($vivant);
            $this->set_nom($nom);
        }

        //Méthodes :

        //Pour attaquer
        public function attaque($joueur,$monstre,$de){
            if($monstre->lanceLeDe($de)>$joueur->lanceLeDe($de)){
                echo $this->get_nom(). " attaque ". $joueur->get_pseudo();
                $bouclier=$joueur->lanceLeDe($de);
                if($bouclier<=2){
                    echo $joueur->get_pseudo(). " a contré avec son bouclier. \n";
                }else{
                    $degatsSubit=10;
                    return $degatsSubit;
                }       
            }
        }

    }

?>