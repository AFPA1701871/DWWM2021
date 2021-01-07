<?php
    $sexe =readline("Écrivez M si vous êtes un Homme et F si vous êtes une Femme ");
    $sexe=strtoupper($sexe);
    $age =readline("Quel est votre Age ? ");

    switch ($sexe) {
        case "M":
            if ($age>20) {
                echo "Vous êtes imposable"; 
            } else {
                echo "Pas d'impots pour vous";
            }
        break;

        case "F":
            if ($age>18 and $age <35) {
                echo "Vous êtes imposable"; 
            } else {
                echo "Pas d'impots pour vous";
            }
        break;
    } 
?>