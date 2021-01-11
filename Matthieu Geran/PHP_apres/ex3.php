<?php

    $tableau = ["chocolat", "menthe", "vanille"];
    $recherche = readline("Tapez le mot recherché : ");
    $trouve = false;

    for ($i=0;$i<=count($tableau)-1;$i++){

        if ($recherche == $tableau[$i]){
            $trouve = true;
            break;
        }

    }

    if ($trouve){
        echo "Mot trouvé.";
    } else {
        echo "Mot non trouvé.";
    }

?>