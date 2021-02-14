<?php
    class Cadre extends Employe {
        private $_listeEmploye;

        public function get_listeEmploye(){
            return $this->_listeEmploye;
        }
    
        public function set_listeEmploye($listeEmploye){
            $this->_listeEmploye = $listeEmploye;
        }

        public function __construct($nom,$prenom,$numSecu,$salaire,$job) {
            Parent::__construct($nom,$prenom,$numSecu,$salaire,$job);
        }

        public function manage() {
            echo $this->_prenom." manage ses employés\n";
        }

        public function augmenteUnSalarie($employe,$augmentation) {
            echo $this->_prenom." augmente le salaire de ".$employe->get_prenom()." de ".$augmentation." %.\n";
            $employe->set_salaire( $employe->get_salaire() + (($employe->get_salaire()*$augmentation)/100) );
            echo $employe->get_prenom()." gagne désormais ".$employe->get_salaire()." € par mois.\n";
        }

        public function toString() {
            echo "Je m'appelle ".$this->_prenom." ".$this->_nom.". Mon numéro de sécurité sociale est le ".$this->_numSecu.". Je suis un(e) ".$this->_job." qui gagne ".$this->_salaire." € par mois et je manage :\n";
            if (is_countable($this->_listeEmploye)) {
                for ($i=0; $i < count( $this->_listeEmploye ) ; $i++) { 
                    echo "\t".$this->_listeEmploye[$i]->get_prenom()." ".$this->_listeEmploye[$i]->get_nom()."\n";
                }
            }
        }
    }
?>