<?php
    echo " **** Renvoi du Nombre de voyelles dans une phrase ****\n";

    // fonction qui permet de renvoyer le nombre de voyelles de la chaine $maPhrase
    function compterNbVoyelles($maPhrase) {
        $maPhraseEnMinuscule = strtolower($maPhrase);
        $tableauMaPhrase=str_split($maPhraseEnMinuscule);
        $tableauVoyelles=array("a","e","i","o","u","y");

        $nbVoyelles=0;
        for ($i=0; $i < count($tableauMaPhrase); $i++) { 
            for ($j=0; $j < count($tableauVoyelles); $j++) { 
                if ($tableauMaPhrase[$i]==$tableauVoyelles[$j]) {
                    $nbVoyelles=$nbVoyelles+1;
                }
            }
        }
        return $nbVoyelles;
    }

    $maChaine=readline("entrez une phrase : ");

    echo "le nombre de voyelles dans $maChaine est : ".compterNbVoyelles($maChaine);
?>