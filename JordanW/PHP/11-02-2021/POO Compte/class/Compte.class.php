<?php 

    class Compte{
        protected $_numero;
        protected $_solde;

        public function __construct(string $numero,float $solde){
           $this->_numero=$numero;
           $this->_solde=$solde;
        }
        
        public function afficherInformationCompte(){
            echo"numero : ".$this->get_numero()."\n";
            echo"solde : ".round($this->get_solde(),2)."\n\n";
        }

        public function retrait(bool $boolDemander,float $montant){
            // solde negatif/zero
            if($this->get_solde() <=0){
                echo "Retrait impossible !! \n\n";
                return array(false,0);
            }

            if($boolDemander){ // je demande de saisir le montant
                do{
                    $montant = readline("Saisir le montant du retrait : ");
                    if($this->_solde<$montant){
                        echo "Pas assez d'argent sur le compte !!"."\n";
                    }
                }while(!is_numeric($montant) && $montant<=0 && $montant >$this->_solde);
            }else{ // le montant est deja saisi
                if($this->get_solde() <$montant){
                echo "Retrait impossible, pas assez d'argent sur le compte !! \n\n";
                return array(false,0);
                }
            }
            $this->_solde-=$montant;
            $this->get_soldeToString();
            return array(true,$montant);
        }
        
        public function versement(bool $boolDemander,float $montant){
            
            if($boolDemander){
                do{
                    $montant = readline("Saisir le montant du versement : ");
                }while(!is_int($montant) && $montant<0 );
            }
            if($montant=="0"){
                echo "Aucun versement effectué !\n";
                return false;
            }
            $this->_solde+=$montant;
            $this->get_soldeToString();
            return true;
        }

        public function virement(Compte $compte){
            
            $tab=$this->retrait(true,0);
            
            if($tab[0]==false){
                echo "Virement impossible !! \n\n";
            }else{
                //$this->_solde-=$tab[1];
                $compte->versement(false,$tab[1]);
                //$this->get_soldeToString();
                //echo "Virement de ".$tab[1]." du compte ".$this->_numero." vers ".$compte->_numero. "\n\n";
                //$this->afficherInformationCompte();
                //$compte->afficherInformationCompte();
            }            
        }

        public function get_solde(){
            return $this->_solde;
        } 
        public function get_soldeToString(){
            Echo "Nouveau solde du compte ".$this->_numero." : ".$this->get_solde()."\n\n";
        } 
        public function get_numero(){
            return $this->_numero;
        }
    }

?>