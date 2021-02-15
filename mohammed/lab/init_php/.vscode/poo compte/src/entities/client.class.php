<?php
class client {
private $_identifiant;
private $_listeCompte;
    public function __construct(string $identifiant,array $listeCompte){
        $this->_identifiant=$identifiant;
        $this->_listeCompte=$listeCompte;
    }
    public function afficherSesInfos(){
        echo " votre identifiant : ".$this->_identifiant."\n";            
      $tab=[];
       foreach ($this->_listeCompte  as  $value) {
        
            $tab=$value->get_numeroCompte().";";
       }
       print_r ($tab);
       $j=1;
       foreach ($this->_listeCompte  as  $valeur) {
        echo " votre solde ".$j." -> ". $valeur->get_solde()."\n";
        $j++;
    }
    }




   // getters
   public function get_identifiant(){
       return $this ->_identifiant;
   }
   public function get_listeComptet(){
    return $this ->_listeCompte;
   }
   //setters 
   public function set_identifiant($identifiant){
     $this ->_identifiant=$identifiant;
    }
    public function set_listeComptet($listeCompte){
    $this ->_listeCompte=$listeCompte;
    }
    //methode
    public function afficherInfo(){
        echo " votre identifiant est :".$this ->_identifiant;
        $tab=$this ->_listeCompte;
        for ($i=0; $i <count($tab) ; $i++) { 
            echo "dans la boucle";
            echo $tab[$i];    
        }
        echo " vous avez ".count($tab)." de compte";
    }

}
?>