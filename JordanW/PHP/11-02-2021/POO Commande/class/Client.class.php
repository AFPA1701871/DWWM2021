<?php 

    class Client{
        protected $_nom;
        protected $_prenom;
        protected $_numeroClient;

        public function __construct(string $nom,string $prenom,string $numeroClient){
           $this->nom=$nom;
           $this->_prenom=$prenom;
           $this->_numeroClient=$numeroClient;
        }

        public function afficherSesInfos(){
            echo "NumeroClient : ".$this->_numeroClient;
            echo "Nom : ".$this->_nom;
            echo "Prenom : ".$this->_prenom;
        }
        
    }

?>