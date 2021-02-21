<?php

    class Cadre extends Employe {
        private $_listeEmploye;

        public function __construct($nom, $prenom, $numSecu, $salaire, $job, array $listeEmploye){
            Parent::__construct($nom, $prenom, $numSecu, $salaire, $job);
            $this->set_listeEmploye($listeEmploye);
        }

        //Méthodes

        public function manage(){
            foreach($this->_listeEmploye as $element){
                $nom = $element->get_nom();
                $prenom = $element->get_prenom();
                echo "\n".$this->_prenom." ".$this->_nom." manage ".$prenom." ".$nom.".";
            }
        }

        public function augmenteUnSalarie(Employe $salarie, float $pourcentage){
            $salarie->set_salaire($salarie->get_salaire()*(1+($pourcentage/100)));
        }







        //get et set
        public function get_listeEmploye(){
            return $this->_listeEmploye;
        }
        public function set_listeEmploye($listeEmploye){
            $this->_listeEmploye = $listeEmploye;
        }



    }


?>