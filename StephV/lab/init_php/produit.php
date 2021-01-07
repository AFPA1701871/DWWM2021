<?php
    $nb1=readline("Saisissez un nombre:");
    $nb2=readline("Saisissez un nombre:");
    $nb=$nb1*$nb2;
        if ($nb<0){
            echo "nombre négatif";
        }
        elseif ($nb==0){
            echo "nombre nul";
        }
        elseif ($nb>0){
            echo "nombre positif";
        }
       
?>