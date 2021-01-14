<?php

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

    // fonction qui permet de purger la chaine $phrase du $caractere de $CaractereAPurger
    function purgeChaineDUncaractere($phrase,$CaractereAPurger) {
        $maPhraseEnMinuscule = strtolower($phrase);
        $tableauMaPhrase=str_split($maPhraseEnMinuscule);
        $CaractereAPurgerEnMinuscule=strtolower($CaractereAPurger);

        for ($i=0; $i < count($tableauMaPhrase); $i++) { 
            if ($tableauMaPhrase[$i]==$CaractereAPurgerEnMinuscule) {
                unset($tableauMaPhrase[$i]);
            }
        }
        $phrasePurgee=implode($tableauMaPhrase);
        return $phrasePurgee;
    }

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

?>