<?php
   function help($repUser){
        echo "1.create table (création de table)                      2.insert into table (insertion de données dans une table)"."\n"."3.select * from (Affichage de données)                  3.quit (Pour quitter)"."\n";
    }return;
/******************************************************************************************************************* */
   function create_table($repUser){
        $nomTable = readline("Ecrire le nom de la table souhaitez : ");
        $nbColonne= readline('Combien de colonne voulez vous crée : ');

        for ($i=1; $i < $nbColonne+1; $i++) { 
            $titreColonne = readline("Ecrire le titre de la colonne ".$i."\n");
            $Colonne[$i]= $titreColonne;
           
        }
        $confirmationUser=readline("Confirmez vous que vous avez bien ecris la commande : CREATE TABLE ".$nomTable."(".$Colonne[1].",".$Colonne[2].",".$Colonne[3].");  (O/N)");
       

        if($confirmationUser=="O"){
            $nomfile= $nomTable.".dwwwm";
            $f = fopen($nomfile,"x+");
            fputs($f,$Colonne[1].";".$Colonne[2].";".$Colonne[3]);
            fclose($f);
            
        }
    }return;
/***************************************************************************************************************** */
   function insert ($repUser){
    
   
   }return;
?>