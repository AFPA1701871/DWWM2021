<?php
    $monDictionnaire=array("acajou","feuille","kilo","mangue","punaise","wu","zigzag");

    $motRecherche=readline("entrez le mot à rechercher dans le dictionnaire: ");

    $limiteRechercheBasse=1;
    $limiteRechercheHaute=8;

    $boolean="faux";
    while ($boolean=="faux") {
        $motMilieu=intdiv($limiteRechercheBasse+$limiteRechercheHaute,2);

        if ($motRecherche==$monDictionnaire[$motMilieu] or $limiteRechercheHaute<$limiteRechercheBasse) {
            $boolean="vrai";
        }
        else if ($motRecherche<$monDictionnaire[$motMilieu]) {
            $limiteRechercheHaute=$motMilieu-1;
        }
        else {
            $limiteRechercheBasse=$motMilieu+1;
        }
    }

    if ($motRecherche==$monDictionnaire[$motMilieu]) {
        echo "le mot est dans le dictionnaire";
    }
    else {
        echo "le mot n'est pas dans le dictionnaire";
    }
    




?>