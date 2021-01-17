<?php
    echo " **** Purge la chaine d'un caractère ****\n";
    
    // fonction qui permet de purger la chaine $phrase du caractere de $CaractereAPurger
    function purgeChaineDUncaractere($phrase,$CaractereAPurger) {
        $maPhraseEnMinuscule = strtolower($phrase);
        $tableauMaPhrase=str_split($maPhraseEnMinuscule);
        $CaractereAPurgerEnMinuscule=strtolower($CaractereAPurger);

        for ($i=0; $i < count($tableauMaPhrase); $i++) { 
            if ($tableauMaPhrase[$i]==$CaractereAPurgerEnMinuscule) {
                $tableauMaPhrase[$i]="";
            }
        }
        $phrasePurgee=implode($tableauMaPhrase);
        return $phrasePurgee;
    }

    $maChaine=readline("entrez une phrase :");
    
    do {
        $monCaractereAPurger=readline("entrez un caractère à purger :");
    } while (strlen($monCaractereAPurger)>=2);

    echo "la phrase $maChaine purgée du caractère $monCaractereAPurger est : ".purgeChaineDUncaractere($maChaine,$monCaractereAPurger);
?>