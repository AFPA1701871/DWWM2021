<?php 
    require('./interface/iParler.php');
    
    abstract class Livret implements iParler {
        private $_numeroCompte;
        public function __construct(string $numeroCompte){
            $this-> _numeroCompte = $numeroCompte;
        }
        
        public function  getNumero(){
            return $this->_numeroCompte;
        }

        public function parler(){
            echo "je suis un livret"."\n";
        }
        
        abstract public function taux();
        
    }

?>  