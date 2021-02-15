<?php

    class Cadre extends employe{
        private $_listeEmploye = [];

        // Constructeur
        public function __construct($prenom,$nom,$numSecu,$salaire,$job){
            Parent::__construct($prenom,$nom,$numSecu,$salaire,$job);            
        }

        // Méthodes 
        public function manage(array $salarie){
            foreach($salarie as $element){
                $this->_listeEmploye[]=$element;
                $nom = $element->get_nom();
                echo "\nMonsieur ".$this->get_nom()." encadre ".$nom.".";
            }

        }

        public function augmenterUnSalarie(Employe $salarie, int $pourcentage){
            $salaireActuel = $salarie->get_salaire();
            $salarie->set_salaire(round($salaireActuel*(1+($pourcentage/100)),2));
        }


        // get et set
        public function get_listeEmploye(){
            return $this->_listeEmploye;
        }

        public function set_listeEmploye($listeEmploye){
            $this->_listeEmploye = $listeEmploye;
        }
        
    }
?>