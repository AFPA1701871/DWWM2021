<?php
    function chargementClass($class){
        require( "./entities/".$class .'.class.php');
    }
    spl_autoload_register('chargementClass'); // chargement automatique des classes
         $choixMonstre=rand(1,2);             // choix de l'adverssaire  
         $joueur =new joueur;
              sleep (1);
     if ($choixMonstre==1) {
                  echo " monstre facile \n";
                  $monstreFacile = new monstreFacile;
             do {
                 $attaqueHero=$joueur->Attaque ();
                 $attaquePetitMonstre=$monstreFacile->AttaquePetitMonstre();
                   echo "mon heros attaque :" .$attaqueHero. " le monstre attaque :". $attaquePetitMonstre."\n";
                   if ($attaqueHero >= $attaquePetitMonstre) {
                     echo $attaqueHero."\n";
                     echo $attaquePetitMonstre."\n";
                        echo " heros gagne "
                        ."*************************************************************   monstre suivant "."\n";
                        $joueur->score();
                        break;
                    }  
                    else if ($attaqueHero <$attaquePetitMonstre) {
                            echo "monstre attaque :" .$attaquePetitMonstre . " hero :".$attaqueHero."\n";
                                if ($attaqueHero>$attaquePetitMonstre) {
                                        echo " heros gagne "
                                        ."*************************************************************   monstre suivant "."\n";
                                        break;       
                                }  
                               else {
                                echo  $joueur->SubitDegats();
                               }
                      }   
                      echo " le reste ds point de vie ".$joueur->get_pointVie();
                        ;
                     echo " votre score est de ".$joueur->score();
                } while ($attaqueHero<$attaquePetitMonstre and  $joueur->EstVivant( )==true);
            
       /* else {
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
            }


    
?>