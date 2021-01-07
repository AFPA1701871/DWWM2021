<?php

    $somme=0;

    do{
        $prix=readline("prix de l'article : ");
        $somme=$somme+$prix;
    } while($prix!=0);

    echo "total = $somme"."\n";

    do{
        $payer=readline("montant payé : ");
    } while($payer<$prix);

    $rendu=$payer-$prix;
    $piece=$rendu%5;
    $rendu=$rendu-$piece;
    $billet5=($rendu%10)/5;
    $rendu=($rendu-(5*$billet5)/10);

    echo "à rendre :"."\n";
    echo "$rendu billet(s) de 10"."\n";
    echo "$billet5 billet(s) de 5"."\n";
    echo "$piece pieces de 1€";

?>