<?php 

	class Client {
    	public $_identifiant;
        public $_compteBancaire;

        public function __construct(string $_identifiant,array $tabCompte){
            $this->_identifiant=$_identifiant;
            $this->_compteBancaire=$tabCompte;
        }

        public function afficherSesInfos(){
            echo "identifiant : ".$this->_identifiant."\n";            
            $strComptes="";
            foreach($this->_compteBancaire as $valeur){
                $strComptes .=$valeur->get_Numero().",";
            }
            if(empty($strComptes)){$strComptes="Aucun compte";}
            echo "Compte en banque :".substr($strComptes,0,-1)."\n\n";
        }

        public function get_compteBancaire(){
            return $this->_compteBancaire;
        }
    }

?>