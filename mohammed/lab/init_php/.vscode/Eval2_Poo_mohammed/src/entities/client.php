<?php
 class client {
    private $_nom;
    private $_prenom;
    private $_compte;
    private $_livret;

        public function __construct(string $nom, string $prenom,compte $compte,livret $livret){
            $this->_nom=$nom;
            $this->_prenom=$prenom;
            $this->_compte=$compte;
            $this->_livret=$livret;
        }
        //getteres
       public function get_nom(){
           return $this->_nom;
        }
       public function get_prenom(){
          return $this->_prenom;
        }
        public function get_compte(){
            return $this->_compte;
        }
        public function get_livret(){
            return $this->_livret;
        }
         //setteres
        public function set_nom(string $nom){
              $this->_nom=$nom;
        }
        public function set_prenom(string $prenom){
               $this->_prenom=$prenom;
        }
        public function set_compte(string $compte){
               $this->_compte=$compte;
        }
        public function set_livret(string $livret){
               $this->_livret=$livret;
        }
        //methode  
                 // permet de retirer de l'argent du compte .
        public function recevoir(int $depense){
            $this->_compte->crediter( $depense);
        }
            // premet de depenser 
           public function depenser(int $depense){
            $this->_compte->debiter( $depense);
        }
             // peret de retirer de l'argent sur compte et la mettre sur livret saisir montant comme argument .
        public function epargner(int $montant){
            $this->_compte->debiter($montant);
            $this->_livret->crediter($montant); 
        }
        // permet d ajouter des interet a l 'epargne 
        public function interet(){
            $this->_livret->appliqueInteret();
        }
            // affichage des information
        public function affiche(){
            echo " le client  ". $this->_nom." ".$this->_prenom." a ".$this->_compte->get_montant()." sur son compte "."numero ".$this->_compte->get_numero()." et ".$this->_livret->get_montant()." sur son livret numero ".$this->_livret->get_numero()."\n";      
        }
        
 }
?>