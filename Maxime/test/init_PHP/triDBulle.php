<?php

    $tab= array(3,25,7,30,9);
    $nb = count($tab);

    echo "tableau : ";
    foreach ($tab as $element) {
        echo "$element ";
        }
        "\n";
        
    $bool=true;
    while($bool){
        $bool=false;
        for($i=0;$i<($nb-1);$i++){
            if($tab[$i]<$tab[$i+1]){
                $tempo=$tab[$i];
                $tab[$i]=$tab[$i+1];
                $tab[$i+1]=$tempo;
                $bool=true;
            }     
        }
    }

    echo "tableau dans l'ordre décroissant : ";
    foreach ($tab as $element) {
        echo "$element ";
        }
        "\n";

?>