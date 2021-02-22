<?php
    function chargementClass($class){
        require( "./entities/".$class .'.class.php');
    }
    spl_autoload_register('chargementClass'); // chargement automatique des classes
                     // choix de l'adverssaire  
         $joueur =new joueur;
              sleep (1);
 do { 
     $choixMonstre=rand(1,2); 
      if ($choixMonstre==1) {
                echo " monstre facile \n";
                $de=new De;
                $monstreFacile = new monstreFacile;
                echo " un nouvau monstre a ete cree \n";
           do {
                $joueur->Attaque ( $de, $monstreFacile );
                    if ($monstreFacile->get_vie()==0) {
                         break;
                    }
                $monstreFacile ->AttaqueMonstre ($de,$joueur);
            } while ($monstreFacile->get_vie()>0);
          
        } 
        
            
    else {
             echo " monstre difficile \n";
                  $de=new De;
                $monstreDifficile = new monstreDifficile ;
                echo " un nouvau monstre a ete cree \n";
                 do {
                        $joueur->Attaque ( $de, $monstreDifficile );
                        if ($monstreDifficile->get_vie()==0) {
                            break;
                        }
                       $monstreDifficile ->AttaqueMonstredificcile  ($de,$joueur);
                    } while ($monstreDifficile->get_vie()>0);               
         }        
} while ( $joueur->EstVivant( )==true);
              echo  "vous avez tuez ". $joueur->get_score()." monstre \n";
            














/*

                 echo " monste difficile \n";
                 $de=new De;
                 $monstreDifficile = new monstreDifficile ;
                 do {
                    echo "mon heros attaque :" .$joueur->Attaque () . " le monstre attaque :". $monstreDifficile->Attaque ();
                    if ($joueur->Attaque ()>=$monstreDifficile->Attaque ()) {
                        echo " heros gagne "
                        ."*************************************************************   monstre suivant ";
                    }
                    else {

                       echo "le monstre gange ";
                       $joueur->SubitDegats();
  
                 } while ($joueur->Attaque ()<$monstreFacile->Attaque () and  EstVivant( )==true);*/
            


    
?>