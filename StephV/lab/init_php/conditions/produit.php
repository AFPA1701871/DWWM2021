<?php
    $nb1=readline("Saisissez un nombre:");
    $nb2=readline("Saisissez un nombre:");
    $nb=$nb1*$nb2;
        if ($nb<0){
            echo "produit négatif";
        }
        elseif ($nb==0){
            echo "produit nul";
        }
        elseif ($nb>0){
            echo "produit positif";
        }
        
?>