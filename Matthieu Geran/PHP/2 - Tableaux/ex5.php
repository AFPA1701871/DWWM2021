<?php

    $somme = 0;
    $notesSup = 0;

    $nbValeurs = readline("Tapez le nombre de notes à saisir : ");

        for ($i=0;$i<=$nbValeurs-1;$i++){

            $valeur = readline("Tapez la note : ");
            $tableau[$i] = $valeur;
            $somme += $valeur;
            
        }

        $moyenne = $somme / count($tableau);

        for ($i=0;$i<=count($tableau)-1;$i++){
            
            if ($tableau[$i] > $moyenne){
                $notesSup++;
            }
        }

        echo "Il y a " . $notesSup . " supérieures à la moyenne de la classe.";

?>