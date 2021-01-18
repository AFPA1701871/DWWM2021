<?php
    $sommeAchats=0;

    do {
        $montantAchat=readline("entrez le montant d'un de vos achats: ");
        $sommeAchats=$sommeAchats+$montantAchat;
    } while ($montantAchat!=0);

    echo "le montant total de vos achats est: $sommeAchats euros\n";
    
    $sommeDue=$sommeAchats;
    $montantDonne=0;

    do {
        echo "la somme que vous devez est: $sommeDue euros\n";
        $montantDuPaiement=readline("entrez le montant du paiement: ");
        $sommeDue=$sommeDue-$montantDuPaiement;
        $montantDonne=$montantDonne+$montantDuPaiement;
    } while ($sommeDue>0);

    echo "le montant total du paiement effectué est:$montantDonne\n";

    $monnaieARendre=$montantDonne-$sommeAchats;

    $nombreBillets10=0;

    while ($monnaieARendre>=10) {
        $monnaieARendre=$monnaieARendre-10;
        $nombreBillets10=$nombreBillets10+1;
    }

    $nombreBillets5=0;

    while ($monnaieARendre>=5) {
        $monnaieARendre=$monnaieARendre-5;
        $nombreBillets5=$nombreBillets5+1;
    }
    
    echo "voici le rendu de la monnaie:\n";
    echo "$nombreBillets10 billets de 10 euros\n";
    echo "$nombreBillets5 billets de 5 euros\n";
    echo "$monnaieARendre pièces de 1 euros\n";

?>