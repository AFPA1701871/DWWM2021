<?php
    echo " **** Renvoi du Nombre de voyelles dans une phrase ****\n";

    function compterNbVoyelles($maPhrase) {
        $maPhraseEnMinuscule = strtolower($maPhrase);
        $tableauMaPhrase=str_split($maPhraseEnMinuscule);

        $nbVoyelles=0;
        for ($i=0; $i < count($tableauMaPhrase); $i++) { 
            if ($tableauMaPhrase[$i]=="a" or $tableauMaPhrase[$i]=="e" or $tableauMaPhrase[$i]=="i" or $tableauMaPhrase[$i]=="o" or $tableauMaPhrase[$i]=="u" or $tableauMaPhrase[$i]=="y") {
                $nbVoyelles=$nbVoyelles+1;
            }
        }
        return $nbVoyelles;
    }

    $maChaine=readline("entrez une phrase : ");

    echo "le nombre de voyelles dans $maChaine est : ".compterNbVoyelles($maChaine);
?>