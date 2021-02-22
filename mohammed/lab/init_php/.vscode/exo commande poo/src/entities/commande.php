<?php
class commande{
    private $_numeroCommande;
    private $_ligneCommande;
    private $_Client;
    public function __construct (int $numeroCommande,array $ligneCommande, client $Client){
        $this->_numeroCommande=$numeroCommande;
        $this->_ligneCommande=$ligneCommande;
        $this->_Client=$Client;      
    }
    //getters
    public function get_ligneCommande(){
        return $this->_ligneCommande;
    }
    public function get_numeroCommande(){
        return $this->_numeroCommande;
    }
    public function get_Client(){
        return $this->_Client->affichageClient();
    }
     //setters
     public function set_ligneCommande($ligneCommande){
        return $this->_ligneCommande=$ligneCommande;
    }
    public function set_numeroCommande($numeroCommande){
        return $this->_numeroCommande=$numeroCommande;
    }
    public function set_Client($Client){
        return $this->_Client=$Client;
    }

   //methode
   public function affichageCommande(){
    echo "le numero de commande est :".$this->_numeroCommande."\n";
    foreach ($this->_ligneCommande as $value) {
    echo $value-> affichageLigneCommande()."\n";  
   }
   echo $this->_Client->affichageClient()."\n";
}
   public function totalCommande(){
       $tabTotal=[];
       foreach ($this->_ligneCommande as $key ) {
        array_push($tabTotal,$key->calculPrixLingeCommande());
       }
       echo " le prix total de votre commande est de : ".array_sum($tabTotal); 
    }

   
}
?>