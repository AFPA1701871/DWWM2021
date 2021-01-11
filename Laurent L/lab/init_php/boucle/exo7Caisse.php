<?php
    $aPayer = 0;
    $montantVerse=0;

    //bouclage pour déterminer le montant d'achat avec sortie sur le 0.
    do{
        $prix = readline("Montant de votre achat : ");
        $aPayer = $aPayer+$prix;
    } while($prix!=0);

    echo "Le montant de votre facture s'eleve à ".$aPayer." euros.\n";

    //bouclage sur le montant versé par le client.
    do{
        $montantVerse = readline("Montant versé par le client : ");
    } while($montantVerse<$aPayer);

    //rendu monnaie
    $aRendre = $montantVerse-$aPayer;

    echo "Nous devons au client ".$aRendre." euros. Soit :\n";

    $billet10 = intval($aRendre/10);
    $solde = $aRendre-($billet10*10);
    $billet5 = intval($solde/5);
    $solde = $solde-($billet5*5);
    $piece1 = $solde/1;

    echo $billet10." billet(s) de 10, ".$billet5." billet(s) de 5, ".$piece1." piece(s) de 1 euro.";






?>