<?php

    class Cadre extends employe{
        private $_listeEmploye = [];

        // Constructeur
        public function __construct($prenom,$nom,$numSecu,$salaire,$job,$listeEmploye){
            Parent::__construct($prenom,$nom,$numSecu,$salaire,$job);   
            $this->set_listeEmploye($listeEmploye);         
        }

        // Méthodes 
        //Renvoie un affichage determinant le manager et le salarié sous sa responsabilité
        //l'argument correspond à un tableau des salariés subordonnés à un manager
        public function manage(){
            foreach($this->_listeEmploye as $element){
                $nom = $element->get_nom();
                $prenom = $element->get_prenom();
                echo "\nMonsieur ".$this->get_nom()." encadre ".$prenom." ".$nom.".\n";
            }

        }

        public function augmenterUnSalarie(Employe $salarie, float $pourcentage){
            foreach($this->_listeEmploye as $element){
                if($element == $salarie){
                    $element->set_salaire($element->get_salaire()+$element->get_salaire()*$pourcentage/100);
                }
            }
            
        }

        public function addEmploye(Employe $employe){
            array_push($this->_listeEmploye);
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