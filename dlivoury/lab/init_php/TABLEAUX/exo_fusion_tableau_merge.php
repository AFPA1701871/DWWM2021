<?php
    //initialisation des tableaux
    $tab1=array(1,2,3,5,6,8,9);
    $tab2=array(12,20,2,30,14,32);
    $tab3=array();

    //initialisation de la longueur des tableaux
    $longTab1=count($tab1);
    $longTab2=count($tab2);
    $longTab3=$longTab1+$longTab2;
    //tri des tableaux
    sort($tab1);
    sort($tab2);
    //affichage des deux tableaux
    echo"tableau 1 : ";
    echo"\n";
    print_r($tab1);
    echo"tableau 2 : ";
    echo"\n";
    print_r($tab2);
    //fusion des deux tableaux et affichage du tableau fusionné
    $tab3=array_merge_recursive($tab1,$tab2);
    sort($tab3);
    
    echo"tableau 3: ";
    print_r($tab3);
   
?>