<?php
    //initialisation des tableaux
    $tab1=array(1,2,3,5,6,8,9);
    $tab2=array(2,12,14,20,30,32);
    $tab3=array();

    //initialisation de la longueur des tableaux
    $longTab1=count($tab1);
    $longTab2=count($tab2);
    $longTab3=$longTab1+$longTab2;
    
    //affichage des deux tableaux
    echo"tableau 1 : \n";  
    print_r($tab1);
    echo"tableau 2 : \n";
    print_r($tab2);

    //initialisation de curseur pour fusion:
    $curseur1=0;
    $curseur2=0;

     // Fusion des tableaux
     for ($i=0; $i < $longTab3; $i++) { 
        if ($curseur1==$longTab1) {
            $tab3[$i]=$tab2[$curseur2];
            $curseur2=$curseur2+1;
        }
        else if ($curseur2==$longTab2) {
            $tableau3[$i]=$tableau1[$curseur1];
            $curseur1=$curseur+1;
        }
        else if ($tab1[$curseur1]<$tab2[$curseur2]) {
            $tab3[$i]=$tab1[$curseur1];
            $curseur1++;
        }
        else {
            $tab3[$i]=$tab2[$curseur2];
            $curseur2++;
        }
    }
    echo"\n";
    echo"tableau 3=";
    print_r($tab3);
    ?>



