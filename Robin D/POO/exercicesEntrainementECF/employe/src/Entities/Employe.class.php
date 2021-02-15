<?php
    class Employe {
        protected $_nom;
        protected $_prenom;
        protected $_numSecu;
        protected $_salaire;
        protected $_job;

        public function get_nom(){
            return $this->_nom;
        }
    
        public function set_nom($nom){
            $this->_nom = $nom;
        }
    
        public function get_prenom(){
            return $this->_prenom;
        }
    
        public function set_prenom($prenom){
            $this->_prenom = $prenom;
        }
    
        public function get_numSecu(){
            return $this->_numSecu;
        }
    
        public function set_numSecu($numSecu){
            $this->_numSecu = $numSecu;
        }
    
        public function get_salaire(){
            return $this->_salaire;
        }
    
        public function set_salaire($salaire){
            $this->_salaire = $salaire;
        }
    
        public function get_job(){
            return $this->_job;
        }
    
        public function set_job($job){
            $this->_job = $job;
        }

        public function __construct($nom,$prenom,$numSecu,$salaire,$job) {
            $this->set_nom($nom);
            $this->set_prenom($prenom);
            $this->set_numSecu($numSecu);
            $this->set_salaire($salaire);
            $this->set_job($job);
        }

        public function toString() {
            echo "Je m'appelle ".$this->_prenom." ".$this->_nom.". Mon numéro de sécurité sociale est le ".$this->_numSecu.". Je suis un(e) ".$this->_job." qui gagne ".$this->_salaire." € par mois.\n";
        }

        public function effectueSonJob() {
            echo $this->_prenom." effectue son travail de ".$this->_job.".\n";
        }
    }
?>