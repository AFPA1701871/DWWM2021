<?php
//***********************************  JEUX CHIFOUMI ************************************************* */
//****************************** j'ai garder des affichage a plusieurs endroit pour le controle *********** */
$quit="qui";
while ($quit != "quit"){
   $save=0;                             // bol pour enregistrer gagnant
   $aleatroire = rand(1,3);            // pour une valeur aleatoire entre 1 et 3
   $nom =Readline("entrer votre nom  :");
   $user=Readline ( "entrez 1 pour piere 2 pour feuille 3 pour ciseau  :");
      while (($user>3) or ($user<=0))  {    // controle de saisie
         $user = readline ("saisie incorrect sasir 1 ou 2 ou 3 : ") ;}
            echo " le joueur $nom a jouer $user "."\n "; //affichege saisie
            echo " la machine a jouer $aleatroire"."\n";
         if ($user==$aleatroire) {
             echo  " egalite\n";
         }
         if ($user==1  and $aleatroire==2) {
                echo "$nom a perdu \n";
         }
         if ($user==1  and $aleatroire==3) {
                echo "$nom a ganger \n";
               $save=1;
         }
         if ($user== 2 and $aleatroire==3) {
              echo "$nom a perdu \n";
         }
         if ($user==2  and $aleatroire==1) {
             echo "$nom a ganger \n";
             $save=1;
         }
         if ($user==3  and $aleatroire==1) {
                echo "$nom a perdu\n ";
         }
         if ($user==3  and $aleatroire==2) {
                echo "$nom a ganger\n ";
                $save=1;
         }
    //******************/ enregistrement des donneé dans un fichier //*****************************//
         if ($save==1) {
               $write =fopen("..\gagant.txt","a");
               fwrite($write,$nom.";");
               fclose($write);
         }
      $quit= readline( " quit pour quiter  :");// bol  pour sortir du jeux
      strtolower($quit);// metre le mot saisie en minuscule
} 
///////****************************affichage des 3 gagnant a partir du fichier ******************************************/
    $read= fopen("..\gagant.txt","r");  
        while (!feof($read)) {
             $line=fgets($read);
              echo $line."\n";
              $tabwinner = explode(";",$line);
              print_r ($tabwinner); 
         }              // controle de saisie de moin de 3 gangnt n'est pas faite donc erreur quand il y'a que deux entrer
       echo  "le gagnant numero 1 est  ".($tabwinner[0])."\n";
       echo  "le gagnant numero 2 est  ".($tabwinner[1])."\n";
       echo  "le gagnant numero 3 est  ".($tabwinner[2])."\n";
       unlink("..\gagant.txt") ;// permet de supprimer le fichier cree donc a chaque fois voir les nouveau 3 gangnant
       fclose($read); 
       
?>