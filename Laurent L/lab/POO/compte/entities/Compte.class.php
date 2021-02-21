<?php
    class Compte{

        private $_numeroCompte ;
        private $_solde;
       

        public function __construct($numeroCompte){
            $this->set_numeroCompte($numeroCompte);
            $this->set_solde(0);
            
        }

        //méthodes

        //Affiche les informations du compte
        public function afficherInformationCompte(){
            echo "Le compte ".$this->get_numeroCompte()." a un solde de ".$this->get_solde()." €.\n";
        }

        //Procede au retrait de liquidité du compte si celui-ci est approvisionné
        public function retrait($montant){
            if($this->_solde <= 0 || $this->_solde < $montant){
                echo "L'approvisionnement du compte n'est pas suffisant pour proceder à l'opération.\n";
            }else {
                $this->set_solde($this->_solde-$montant);
                echo "Vous venez de débiter un montant de ".$montant." €. \nLe compte ".$this->_numeroCompte." présente un solde de ".$this->get_solde()." €.\n";
            }
        } 

        //Genere un versement dans le compte du montant désiré
        public function versement($montant){
            $this->set_solde($this->_solde+$montant);
            echo "Vous venez de proceder à un versement d'un montant de ".$montant." €. \nLe compte ".$this->_numeroCompte." présente un solde de ".$this->get_solde()." €.\n";
        }

        //
        public function virementCompte($montant, $numeroCompte, array $listeCompte){
            $this->retrait($montant);
            for($i=0; $i<count($listeCompte); $i++){
                if($listeCompte[$i]->get_numeroCompte()==$numeroCompte){
                    $listeCompte[$i]->versement($montant);                    
                }
            }
            // $numeroCompte->versement($montant);

            
        }
            

       
                        

    

        // get et set

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

        


    }

?>