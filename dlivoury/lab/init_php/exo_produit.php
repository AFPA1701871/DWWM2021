<?php
    $nombreUser1=readline("entrez un chiffre ou un nombre: ");
    $nombreUser2=readline("entrez un deuxieme chiffre ou nombre:");
        
        if (($nombreUser1*$nombreUser2)<0){
            echo "le resultat de $nombreUser1 fois $nombreUser2 est negatif";
        }
        else if (($nombreUser1*$nombreUser2)>0) {
            echo "le resultat de $nombreUser1 fois $nombreUser2 est positif";
        }
        else    
            echo "le resultat de $nombreUser1 fois $nombreUser2 est nul";
        ?>   