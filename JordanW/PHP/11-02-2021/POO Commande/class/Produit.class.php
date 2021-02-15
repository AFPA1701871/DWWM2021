<?php 

	class Produit {
    	public $_libelle;
        public $_description;
        public $_reference;
        public $_prixUnitaireTTC;

        public function __construct(string $libelle,string $description,string $reference,float $prixUnitaire){
           $this->_libelle=$libelle;
           $this->_description=$description;
           $this->_reference=$reference;
           $this->_prixUnitaireTTC=$prixUnitaire;
        }

        public function afficherSesInfos(){

            echo "Libelle : ".$this->_libelle."\n";            
            echo "Description :".$this->_description."\n";
            echo "Reference :".$this->_reference."\n";
            echo "PU TTC :".$this->_prixUnitaireTTC."\n";
        }

    }

?>