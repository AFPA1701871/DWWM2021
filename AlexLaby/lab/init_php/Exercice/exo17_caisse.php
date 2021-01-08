<?php

    $a=0;
    $intAchat=0;
    $intSommeDue=0;
    $intSommePaye=0;
    $int10e=0;
    $int5e=0;
    $int1e=0;

    while ($intAchat!== "y"){
        $intAchat=readline ("Appuyez sur y quand vous avez terminé de donner les prix des articles.");
        $intSommeDue=$intSommeDue+$intAchat;
        if ($intAchat== "y"){
            echo "Le client doit la somme de ". $intSommeDue. " euros";
        }
    }

    $intSommePaye=readline (" Quelle somme à payé le client ?");
        if ($intSommePaye<$intSommeDue){
            $a=$intSommeDue-$intSommePaye;
            while ($a!==0){
                echo "Le client vous doit encore ". $a. " euros";
                $intSommePaye=readline(" Combien vous-a-t-il donné ?");
                $a=$a-$intSommePaye;
            }
            echo "Le client a payé";
        }else if ($intSommePaye>$intSommeDue){
            $a=$intSommePaye-$intSommeDue;
            echo "Vous devez encore ". $a. " euros" . "\n";
                while ($a>=10){
                    $int10e=$int10e+1;
                    $a=$a-10;
                }
                while ($a>=5){
                    $int5e=$int5e+1;
                    $a=$a-5;
                }
                while ($a>=1){
                    $int1e=$int1e+1;
                    $a=$a-1;
                }
                echo "Vous devez au client ". $int10e." x 10 euros, " .$int5e. " x 5 euros et " .$int1e. " x 1 euros.";
        }else if ($intSommePaye==$intSommeDue){
            echo "le client à payé et ne vous doit rien.";
        }

?>