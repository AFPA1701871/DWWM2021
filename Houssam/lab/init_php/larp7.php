<?php
    $prix = 1;
    $somme = 0;
    $billet10 =0 ;
    $billet5 =0;
    $euro =0;
    $paiement=0;
        while($prix<>0){
            $prix =readline("Entrez un prix : ") ."\n";
            $somme=$somme+$prix;
            break;
        }

        echo "Total de vos achats est : " .$somme ."\n";

        while($paiement<$somme){
            $paiement =readline("Combien vous payez ? ") ."\n";
            $monnaie=$paiement-$somme;
            break;
        }

        echo "Vous avez payé : " .$paiement . " Euros" ."\n";
        echo "On vous doit : " .$monnaie ." Euros" ."\n";

        $billet10= intdiv ($monnaie ,  10 ) ;
        $reste=$monnaie%10;
        $billet5= intdiv ($reste ,  5 );
        $reste=$monnaie%5;
        $euro=$reste;

        echo "Soit : "."\n";
        echo $billet10. " Billet(s) de 10" ."\n";
        echo $billet5. " Billet(s) de 5" ."\n";
        echo $euro. " Pièce(s) d'un euro" ."\n";
?>