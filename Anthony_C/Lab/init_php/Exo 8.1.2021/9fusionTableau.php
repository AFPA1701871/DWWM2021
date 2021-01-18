<?php
    $monTableau=array(1,3,4,5,8,9);
    $monTableau2=array(2,6,7,10);
    $compteur = 0;
        for ($i = 0 ; $i < count($monTableau);$i++){
            for ($k = 0; $k < count($monTableau2);$k++){
                if ($monTableau[$i] < $monTableau2[$k]){
                    $stock = $monTableau[$i];
                }
                else{
                    $w = count($monTableau3)-1;
                    if ($monTableau2[$k] > $monTableau3[$w]){
                        $monTableau3[$compteur] = $monTableau2[$k];
                        $compteur++; 
                    }
                    else{
                        $stock = $monTableau[$i];
                    }
                }
            }
            $monTableau3[$compteur]= $stock;
            $compteur++;
        }
        for ($i = 0; $i < count($monTableau2); $i++){
            $w = count($monTableau3)-1;
            if ($monTableau2[$i] > $monTableau3[$w]){
                $monTableau3[$compteur] = $monTableau2[$i];
                $compteur++;
            }
        }
        print_r($monTableau3);
        echo "k'ai réussis!";
?>