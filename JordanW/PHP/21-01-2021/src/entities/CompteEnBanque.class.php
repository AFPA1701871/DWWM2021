<?php 

class CompteEnBanque {

        private $_numero=0; 
        private $_solde=2000;
        private $_plafond=10000;
        private $_tauxInteret=0.5;

        private Banque $_banque;

        public function __construct(banque $banque,string $numeroCompte,float $solde,float $plafond,float $tauxInteret){
            
            $this->setBanque($banque);

            $this-> setNumero($numero);
            $this-> setSolde($solde);
            $this-> setPlafond($plafond);
            $this-> setTauxInteret($tauxInteret);
        }
        
        private function setNumero(string $numero){
            $this->_banque=$banque;    
        }
        private function setSolde(float $solde){
            $this->_solde=$solde;    
        }
        private function setplafond(float $plafond){
            $this->_banque=$banque;    
        }
        private function setBanque(banque $banque){
            $this->_banque=$banque;    
        }
        
        public function getPlafond(){
            echo "Le plafond est de : " . $this->_plafond."\n";
        }

        public function getSolde(){
            echo "Le solde est de ". $this->_solde."\n";
        }
        
        public function  getNumero(){
            $this->_numero+=1;
            echo "Le numéro du compte est ". strval($this->_numero) . "\n";
        }
        
        Public function getTInteret(){
            echo "Le Taux d'Interet est de : " + $this->_tauxInteret ."\n";
        }
        
    }

?>  