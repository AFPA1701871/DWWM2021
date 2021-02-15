<?php
    class Client {
        private $_identifiant;
        private $_compteBancaire;

        public function get_identifiant(){
            return $this->_identifiant;
        }
    
        public function set_identifiant($identifiant){
            $this->_identifiant = $identifiant;
        }
    
        public function get_compteBancaire(){
            return $this->_compteBancaire;
        }
    
        public function set_compteBancaire($compteBancaire){
            $this->_compteBancaire = $compteBancaire;
        }

        public function __construct($identifiant,$compteBancaire) {
            $this->set_identifiant($identifiant);
            $this->set_compteBancaire($compteBancaire);
        }

        public function afficherSesInfos() {
            $stringComptes="";
            for ($i=0; $i < count($this->_compteBancaire) ; $i++) { 
                $stringComptes.=$this->_compteBancaire[$i]->get_numeroCompte().";";
            }
            $stringComptes=substr( $stringComptes,0,strrpos($stringComptes,";") );

            echo "identifiant du propriétaire : ".$this->_identifiant." | numéros comptes : ".$stringComptes."\n";
        }
    }
?>