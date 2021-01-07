<?php
    $nb1=readline("entrer un nombre ");
    $nb2=readline("entrer unsecond nombre ");

    if(($nb1>0 and $nb2>0) or ($nb1<0 and $nb2<0)){
        echo "le produit est positif";
    }

    if(($nb1>0 and $nb2<0) or ($nb1<0 and $nb2>0)){
        echo "le produit est négatif";
    }

    if($nb1==0 or $nb2==0){
        echo "le produit est nul";
    }
?>