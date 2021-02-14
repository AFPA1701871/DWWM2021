<?php
    class Compte {
        private $_numeroCompte;
        private $_solde;

        public function get_numeroCompte(){
            return $this->_numeroCompte;
        }
    
        public function set_numeroCompte($numeroCompte){
            $this->_numeroCompte = $numeroCompte;
        }
    
        public function get_solde(){
            return $this->_solde;
        }
    
        public function set_solde($solde){
            $this->_solde = $solde;
        }

        public function __construct($numeroCompte) {
            $this->set_numeroCompte($numeroCompte);
            $this->set_solde(0);
        }

        public function afficherInformationCompte() {
            echo "voici les informations du compte: \n";
            echo "numero de compte : ".$this->_numeroCompte." | solde du compte : ".$this->_solde."\n";
        }

        public function retrait() {
            $montantRetrait=readline("quel est le montant du retrait que vous souhaitez effectuer? ");
            if ($montantRetrait<=$this->_solde and $montantRetrait>0) {
                echo "vous pouvez effectuer un retrait de ".$montantRetrait." sur ce compte\n";
                $this->set_solde($this->_solde-$montantRetrait);
                echo "le retrait a été effectué\n";
            }
            else {
                echo " vous ne pouvez pas effectuer un retrait de ".$montantRetrait." sur ce compte\n";
                echo "le retrait n'a pas été effectué\n";
            }
        }

        public function versement() {
            $montantVersement=readline("quel est le montant du versement que vous souhaitez effectuer? ");
            if ($montantVersement>0) {
                $this->set_solde($this->_solde+$montantVersement);
                echo "le versement a été effectué\n";
            }
        }

        public function virement($compte) {
            $montantVirement=readline("quel est le montant du virement que vous souhaitez effectuer? ");
            if ($montantVirement<=$this->_solde and $montantVirement>0) {
                echo "vous pouvez effectuer un virement de ".$montantVirement." depuis ce compte\n";
                $this->set_solde($this->_solde-$montantVirement);
                $compte->set_solde($compte->get_solde()+$montantVirement);
                echo "le virement a été effectué\n";
            }
            else {
                echo "vous ne pouvez pas effectuer un virement de ".$montantVirement." depuis ce compte\n";
                echo "le virement n'a pas été effectué\n";
            }
        }
    }
?>