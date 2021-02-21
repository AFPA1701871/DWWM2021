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
               // $tab[]="";
                $i=1;
           foreach ($this->_listeCompte as  $value) {  
                $npersocompte =$value-> get_numeroCompte()  ;    
                echo "votre numero de compte $i :" . $npersocompte  ."\n";
               // $tab1= array_push($tab,$npersocompte)  ; on peut eregistrer les  aleur dans un tab
                $i++;
            }
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
            // permet d'afficher les info d'un compte (numero et solde) en choisissant un compte en particuler $choix
    public function afficherUnCompte(int $choix){   
        $i=1;
        foreach ($this->_listeCompte as  $value) {  
                if ($choix==$i) {
                    $npersocompte =$value-> get_numeroCompte()  ;    
                    echo "votre numero de compte $i :" . $npersocompte  ."\n";
                     // $tab1= array_push($tab,$npersocompte)  ; on peut eregistrer les  aleur dans un tab  
                } 
            $i++;
        }   
            $j=1;
        foreach ($this->_listeCompte  as  $valeur) {
                if ($choix==$j){
                    echo " votre solde ".$j." -> ". $valeur->get_solde()."\n";            
                }
            $j++;    
        }               
     }
       // permet de faire un retrait  d'un compte en choisissant un compte en particuler $choix en argument
     public function retrait(int $choix){
                  $retrait = readline ("montant retrait");
                    $j=1;
            foreach ($this->_listeCompte  as  $valeur) {
                   if ($choix==$j){
                        echo " votre solde  est ".$j." -> ". $valeur->get_solde()."\n";    
                        echo" vous voulez retirer $retrait " ;
                            if ($valeur->get_solde()>$retrait) {
                                 echo" vous avez retirer $retrait ";
                                 $reste=$valeur->get_solde()-$retrait;
                                 $valeur->set_solde($reste);
                                echo " votre solde  maintenant est : -> ". $valeur->get_solde()."\n"; 
                            }else {
                                 echo " votre solde ne permet pas de faire cette operation !!";
                            }       
                    }
                $j++;    
            }  
     }
        // permet de faire un verssement  d'un compte en choisissant un compte en particuler verssement en argument 
   public function compteACrediter(int $verssement){
                $j=1;
                do {
                    $compteACrediter=readline ( "choisir le comte a crediter 1 ou 2  :");  
                } while ($compteACrediter >2);
                    foreach ($this->_listeCompte  as  $valeur) {
                        if ($compteACrediter==$j){
                           echo " le solde de votre compte avant virrement est de :".$valeur->get_solde()."\n"; 
                                $compteACrediter=$valeur->get_solde()+$verssement;
                                $valeur->set_solde($compteACrediter); 
                                echo " le solde de votre compte apres virrement est de :".$valeur->get_solde()."\n";  
                        }  
                        $j++;         
                    }                    
                }   
                  // permet de debiter un compte choisis de la somme du virment montant verssement en argument    
     public function compteAdebiter(int $verssement){
                    $i=1;
                do {    
                    $compteAdebiter=readline( "choisir le compte a debiter 1 ou 2  :") ;  
                 } while ($compteAdebiter >2);    
                    foreach ($this->_listeCompte  as  $valeur1) {
                        if ($compteAdebiter==$i ){
                          echo "votre solde est de : ". $compteAdebiter=$valeur1->get_solde()."\n"; 
                          while ($verssement>$valeur1->get_solde() and $verssement!="quit" ) {
                            echo " votre solde ne permet pas de faire cette operation !!\n";
                            $verssement=readline( "saisir montant inferieur a votre solde ou taper quit pour sortir ");
                          }
                            if ($compteAdebiter>$verssement) {
                                $compteAdebiter=$valeur1->get_solde()-$verssement;
                                $valeur1->set_solde($compteAdebiter); 
                                echo "votre solde apres virement sera de : ".$valeur1->get_solde()."\n";   
                                return $verssement;
                            }
                        }
                        $i++;
                    }
                    
        }  
}
   



?>