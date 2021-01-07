<?php
    $prixClient=1;
    $sommeaPayer=0;

        while($prixClient!=0){
            $prixClient=readline("prix de l'article: ");
            $sommeaPayer=$sommeaPayer+$prixClient;
        }
        echo"montant facturé: $sommeaPayer\n";
            $montantFacturé=0;

        while ($montantFacturé<$sommeaPayer){
            echo"il manque de l'argent : \n";
            $montantFacturé= readline("montant donné: ");
        }
        $montantRendu=$montantFacturé-$sommeaPayer;
        $billets10=0;

        while($montantRendu>=10){
            $billets10=$billets10+1;
            $montantRendu=$montantRendu-10;
        }
        if($montantRendu>=5){
            $billet5=1;
            $montantRendu=$montantRendu-5;
        }
            else{
                $billet5=0;
            }

        echo"montant a rendre: $billets10 billet(s) de 10 euros, $billet5 billet de 5 euros et $montantRendu pièce(s) de 1 euro";