<?php 

    abstract class CompteEnBanque {

        protected $_numero=0; 

        public function __construct(string $numeroCompte){

            $this-> _numero=$numeroCompte;
        }
        
        public function  getNumero(){
            echo "Le numéro du compte est ". strval($this->_numero) . "\n";
            return $this->_numero;
        }
        
        abstract public function plafond();
        
    }

?>  