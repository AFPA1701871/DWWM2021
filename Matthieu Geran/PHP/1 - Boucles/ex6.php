<?php

    $somme=0;
    $prix=1;
    $remise=0;
    $billet10=0;
    $billet5=0;
    $piece=0;

    echo "Veuillez taper le prix de chaque article.\n";
    echo "Une fois la liste terminée, tapez 0.\n";
    

    while ($prix != 0){
        $prix = readline("Prix de l'article : ");
        $somme = $somme + $prix;
    }

    echo "Total : " . $somme . "\n";

    $paiement = readline("Paiement : ");
    $reste = $somme - $paiement;

    while ($reste != 0 and $reste > 0){
        echo "Il manque " . $reste . " euros.\n";
        $paiement = readline("Paiement : ");
        $reste = $reste - $paiement;
    }

    while ($reste < 0){
        
        if ($reste <= (-10)){
            $reste = $reste + 10;
            $billet10++;
        }

        if ($reste <= (-5) and $reste > (-10)){
            $reste = $reste + 5;
            $billet5++;
        }

        if ($reste > (-5) and $reste < 0){
            $reste = $reste + 1;
            $piece++;
        }

    }

    echo "Monnaie rendue : " . $billet10 . " billet(s) de 10, " . $billet5 . " billet(s) de 5 et " . $piece . " pièce(s) de 1 euro.";

?>