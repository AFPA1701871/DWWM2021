<?php
     function afficherInfo($client){
        $client->afficherSesInfos();    
    }
      function affichercompte($client){
        do {
          $choix=readline( " 1 ou 2");
         } while ($choix!=1 and $choix!=2) ;       
        $client->afficherUnCompte($choix);         
    }
      function retraiArgent($client){
      do {
           $choix=readline( " choisir compte 1 ou 2 :");
       } while ($choix!=1 and $choix!=2) ; 
       $client->retrait($choix);
     }
     function versement($client){
      do {
        $verssement=readline( " choisir montant de verssement :");
    } while ($verssement<=0) ;
      $client->compteACrediter($verssement);
     }
     function virement($client1,$client2){
          do {
              $verssement=readline( " choisir montant de verssement :");
          } while ($verssement<=0) ;
            $valeur =$client1->compteAdebiter($verssement);
                     $client2->compteACrediter($valeur);
      }
    

?>