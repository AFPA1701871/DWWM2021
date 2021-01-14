<?php
    echo " **** Purge la chaine d'un ou plusieurs caractères ****\n";
    
    // fonction qui permet de purger la chaine $phrase des $caracteres de la chaine $CaracteresAPurger
    function purgeChaineDUnOuPlusieurscaracteres($phrase,$CaracteresAPurger) {
        $maPhraseEnMinuscule = strtolower($phrase);
        $tableauMaPhrase=str_split($maPhraseEnMinuscule);
        $CaractereAPurgerEnMinuscule=strtolower($CaracteresAPurger);
        $tableauCaracteresPurger=str_split($CaractereAPurgerEnMinuscule);
        

        for ($i=0; $i < count($tableauMaPhrase); $i++) { 
            for ($j=0; $j < count($tableauCaracteresPurger); $j++) { 
                if ($tableauMaPhrase[$i]==$tableauCaracteresPurger[$j]) {
                    $tableauMaPhrase[$i]="";
                }
            }
        }
        $phrasePurgee=implode($tableauMaPhrase);
        return $phrasePurgee;
    }

    $maChaine=readline("entrez une phrase :");
    $mesCaracteresAPurger=readline("entrez un ou plusieurs caractères à purger (en collant toutes les lettres) :");

    echo "la phrase $maChaine purgée des caractères $mesCaracteresAPurger est : ".purgeChaineDUnOuPlusieurscaracteres($maChaine,$mesCaracteresAPurger);
?>