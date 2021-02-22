<?php
    class livret extends compte {
        // class qui herite de compte 
        // methode 
        public function appliqueInteret(){
            $intert=$this->_montant*(5/100);
            $this->_montant=$this->_montant+$intert;
        }

    }

?>