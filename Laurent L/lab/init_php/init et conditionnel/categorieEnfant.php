<?php
    //Variable age
    $age = readline("Age de l'enfant : ");
    $age = intval($age);
    
    //conditionnelles imbriquées pour les tranches d'age
    if (($age>=6)and($age<=7)){
        $cat = "poussin";
    } else if (($age>=8)and($age<=9)){
            $cat = "pupille";
    }   else if (($age>=10)and($age<=11)) {
                $cat = "minime";
    }       else if ($age>=12) {
                    $cat = "cadet";
    }           else {
                        $cat = "hors categorie";
    };

    //affichage catégorie de l'enfant
    echo "Votre enfant est ".$cat.".";

?>