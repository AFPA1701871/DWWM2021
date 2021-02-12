<?php

    class Cadre extends employe{
        private $_listeEmploye = [];

        // Constructeur
        public function __construct($prenom,$nom,$numSecu,$salaire,$job){
            Parent::__construct($prenom,$nom,$numSecu,$salaire,$job);            
        }

        // Méthodes 
        public function manage(Employe $salarie){
            array_push($this->_listeEmploye,$salarie);
        }

        public function augmenterUnSalarie(Employe $salarie, int $pourcentage){
            for($i=0;$i<count($this->_listeEmploye);$i++){
                if($this->get_listeEmploye()[$i]->get_nom() == $salarie){
                    $salaire = $this->get_listeEmploye()[$i]->get_salaire()*(1+($pourcentage/100));
                    $this->get_listeEmploye()[$i]->set_salaire($salaire);
                    echo $this->get_listeEmploye()[$i]->get_nom()." ".$this->get_listeEmploye()[$i]->get_salaire();
                }
            }


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