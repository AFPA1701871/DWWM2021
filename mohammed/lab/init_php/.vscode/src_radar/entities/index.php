<?php
require ("./calsses/class_car.php");
require ("./calsses/class_pv.php");
// ***********************************creation  et initialisattion de new classe pv *********************//
$pv=new pv();
$pv->set_write();      
//*************************************defenition et controle nombre de voiture ************************************* */    
    do {                                             // nombre de voiture +=2
              $nombreVoiture = readline( " entrer le nombre de voitures  sup ou egale a 2 :");
    }       while ($nombreVoiture < 2);
//***********************************creation de new calsse voiture ************************************************** */
      for ($i=0; $i < $nombreVoiture; $i++) {  // initiation voiture par user jusqu'a nombre voiture 
            $couleur= readline(" entrez couleur  :");
            $marque= readline(" entrez marque   :");
            $modele= readline(" entrez modele  :");
            $immatricule=readline(" entrez immatricule  :");
            $voiture[$i] = new voiture($couleur,$modele,$marque,$immatricule);
                // affichage de controle
              echo $voiture[$i]->get_couleur()."\n";
              echo $voiture[$i]->get_marque()."\n";
              echo $voiture[$i]->get_immatricule()."\n";
              echo $voiture[$i]->get_modele()."\n";
        }
      //****************fixer la limite************************************************************ */
               $limite = readline( " fixer la limite de vitesse  :");
               $bol=1; // bol pour sortir la boucle  do while
      //*************************** faire rouler les voiture ----> limite******************************** */         
  do {
       for ($i=0; $i <$nombreVoiture ; $i++) {        // for pour ajouter de la vitesse a chaque voiture a son tour          
                $lastVitesse = $voiture[$i]->get_vitesse();
                echo $lastVitesse."\n";
                $voiture[$i]->set_vitesse();
                $newVitesse = $voiture[$i]->get_vitesse();
                echo $newVitesse."\n";
                $acceleration=$newVitesse-$lastVitesse;
                echo " la voiture  ". $voiture[$i]->get_marque()."  vien d'accelerer de $acceleration "."\n";
                echo " la voiture  ". $voiture[$i]->get_marque()."  roule maintenant a $newVitesse \n";
                readline();
       //************************ controle vitesse ++++ affichage******************************** */     
             if ($newVitesse>=$limite and $newVitesse<=$limite+10) {
                echo $pv->get_write();
                echo " votre vitesse est  :".$voiture[$i]->get_vitesse()."\n";
                echo " moins un point et 45 euros d'amende  pour  :\n";
                echo " la voiture de la marque  :".$voiture[$i]->get_marque()."\n";
                echo " modele  :" .$voiture[$i]->get_modele()."\n";
                echo " couleur  :" .$voiture[$i]->get_couleur()."\n";
                echo " immatrucule  :". $voiture[$i]->get_immatricule()."\n";
                $bol=0;
              break;}
            
            else if ($newVitesse>$limite+10 and $newVitesse<=$limite+20) {
                echo $pv->get_write();
                echo " votre vitesse est  :".$voiture[$i]->get_vitesse()."\n";
                echo " moins 3 point et 90 euros d'amende  \n";               
                echo " la voiture de la marque  :".$voiture[$i]->get_marque()."\n";
                echo " modele  :" .$voiture[$i]->get_modele()."\n";
                echo " couleur  :" .$voiture[$i]->get_couleur()."\n";
                echo " immatrucule  :". $voiture[$i]->get_immatricule()."\n";
                $bol=0;
              break;}
            
            elseif ($newVitesse>$limite+20) {
                echo $pv->get_write();
                echo " votre vitesse est  :".$voiture[$i]->get_vitesse()."\n";
                echo  "la voiture de la marque  :".$voiture[$i]->get_marque()."\n";
                echo " modele  :" .$voiture[$i]->get_modele()."\n";
                echo " couleur  :" .$voiture[$i]->get_couleur()."\n";
                echo " immatrucule  :". $voiture[$i]->get_immatricule()."\n"; 
                echo " rendez vous a la gendarmerie ...";
              $bol=0;
            break;}       
        }

  }while ($bol!=0);                  
            
?>