<?php
    // Déclaration des tableaux
    $tableau1=array(1,3,4,6,8,11,57);
    $tableau2=array(3,5,7,14,21,60);
    $tableau3=array();

    // Longueur des tableaux
    $longueurTableau1=count($tableau1);
    $longueurTableau2=count($tableau2);
    $longueurTableau3=$longueurTableau1+$longueurTableau2;
    
    // Affichage des tableaux
    echo "tableau1=";
    for ($i=0; $i < $longueurTableau1; $i++) { 
        echo "$tableau1[$i],";    
    }
    echo"\n";
    echo "tableau2=";
    for ($i=0; $i < $longueurTableau2; $i++) { 
        echo "$tableau2[$i],";
    }

    // Déclaration de curseurs pour permettre la progression dans le processus de fusion
    $curseurTableau1=0;
    $curseurTableau2=0;

    // Fusion des tableaux
    for ($i=0; $i < $longueurTableau3; $i++) { 
        if ($curseurTableau1>$longueurTableau1-1) {
            $tableau3[$i]=$tableau2[$curseurTableau2];
            $curseurTableau2=$curseurTableau2+1;
        }
        elseif ($curseurTableau2>$longueurTableau2-1) {
            $tableau3[$i]=$tableau1[$curseurTableau1];
            $curseurTableau1=$curseurTableau1+1;
        }
        elseif ($tableau1[$curseurTableau1]<$tableau2[$curseurTableau2]) {
            $tableau3[$i]=$tableau1[$curseurTableau1];
            $curseurTableau1=$curseurTableau1+1;
        }
        else {
            $tableau3[$i]=$tableau2[$curseurTableau2];
            $curseurTableau2=$curseurTableau2+1;
        }
    }

    // Affichage du tableau3
    echo"\n";
    echo "tableau3=";
    for ($i=0; $i < $longueurTableau3; $i++) { 
        echo "$tableau3[$i],";    
    }
?>