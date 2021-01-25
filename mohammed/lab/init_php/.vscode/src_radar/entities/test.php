<?php
require ("./calsses/class_car.php");
require ("./calsses/class_radar.php");
do {                                             // nombre de voiture +=2
       $nombreVoiture = readline( " entrer le nombre de voitures  sup ou egale a 2 :");
    }       while ($nombreVoiture < 2);

 for ($i=0; $i < $nombreVoiture; $i++) {  // initiation voiture par user jusqu'a nombre voiture 
          $voiture[$i] = new voiture();
          $couleur= readline(" entrez couleur  :");
          $marque= readline(" entrez marque   :");
          $modele= readline(" entrez modele  :");
          $immatricule=readline(" entrez immatricule  :");
          $voiture[$i]->set_couleur( $couleur);
          $voiture[$i]->set_marque( $marque);
          $voiture[$i]->set_immatricule( $immatricule);
          $voiture[$i]->set_modele( $modele);
              echo " la voiture $i   :\n";
              echo $voiture[$i]->get_couleur()."\n";
              echo $voiture[$i]->get_marque()."\n";
              echo $voiture[$i]->get_immatricule()."\n";
              echo $voiture[$i]->get_modele()."\n";
    }
               print_r ($voiture);
               $limite = readline( " fixer la limite de vitesse  :");
               $bol=1;
         do {
             for ($i=0; $i <$nombreVoiture ; $i++) {                 
                $voiture[$i];
              $acceleration =rand(1,25);
              $vitesse =  $voiture[$i] ->get_vitesse();
              $vitesseF=$vitesse+$acceleration;
              $vitesseF=$voiture[$i]->set_vitesse($vitesse);
            echo " la voiture $i vien d'accelerer de  $acceleration "."\n";
             echo " la voiture $i roule maintenant a $vitesseF \n";
             readline();}
            
             if ($vitesse>=$limite+10) {
                echo " moins un point et 45 euros d'amende ";
                break;
            }
            else if ($vitesse<$limite+10 and $vitesse>$limite+20) {
                echo " moins 3 point et 90 euros d'amende ";
                break;
            }
            elseif ($vitesse>$limite+20) {
               echo " rendez vous a la gendarmerie ...";
               break;

            }
            if ($vitesse >$limite+10 ) {
                $bol=0;
                break;
            }

            }while ($bol!=0);
            
            
?>