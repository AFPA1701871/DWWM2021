<?php

    $payer=0;
    $somme=0;

    do{
        $prix=readline("prix de l'article : ");
        $somme=$somme+$prix;
    } while($prix!=0);

    echo "total = $somme \n";

    do{
        $payer=readline("montant payé : ");
    } while($payer<$prix);

    $rendu=$payer-$somme;
    echo "à rendre : $rendu \n";

    $billet10=intval($rendu/10);
    $reste=$rendu-($billet10*10);
    echo "$billet10 billet(s) de 10 \n";
    
    $billet5=intval($reste/5);
    $reste=$reste-($billet5);
    echo "$billet5 billet(s) de 5"."\n";

    $piece=$reste/1;
    echo "$piece pieces de 1€";

?>