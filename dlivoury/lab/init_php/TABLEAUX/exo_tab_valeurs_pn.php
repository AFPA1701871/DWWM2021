<?php
    $nbValeur=readline("saisir le nombre de valeur a entrer: ");

    while($nbValeur<=0 or $nbValeur/1!=$nbValeur or $nbValeur!=is_numeric($nbValeur)){
        $nbValeur=readline("saisir un nombre de valeur valide: ");
    }
    $tabValeur=[];
    $nombreNeg=0;
    $nombrePos=0;
    $nombreNul=0;

    for($i=0;$i<$nbValeur;$i++){
        $tabValeur[$i]=readline("saisir une valeur: ");

    if($tabValeur[$i]!=is_numeric($tabValeur[$i])){
        $tabValeur[$i]=readline("saisir une valeur valide: ");
    }   
        if($tabValeur[$i]> 0){
            $nombrePos++;
        }
            else if ($tabValeur[$i]< 0){
                $nombreNeg++;
            }
                else if($tabValeur=0){
                    $nombreNul++;
                }
                  
    }
    echo "$nombrePos".' '."positif\n";
    echo "$nombreNeg".' '."negatif\n";
    echo "$nombreNul".' '."nul";
    ?>