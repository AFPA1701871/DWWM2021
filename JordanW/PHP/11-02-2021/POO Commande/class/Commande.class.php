<?php 

    class Commande{
        public static $_numeroCommande=1;
        public $_client;
        public $_listeLigneCommande;

        public function __construct(Client $client){
           $this->_numeroCommande=self::$_numeroCommande;
           self::$_numeroCommande+=1;
           $this->_client=$client;
           //$this->_listeLigneCommande=$ligneCommande;
        }

        public function calculTotalLigneTTC(){
            echo"";
        }

        public function affichage(){
            echo"";
        }
        
    }

?>