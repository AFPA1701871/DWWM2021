<?php
    $echelleRichter=readline("Ecrivez la valeur d'echelle :");
    while($echelleRichter < 1){
        echo "Erreur de saissie, veillez recommencer."."\n";
        $echelleRichter=readline("Ecrivez la valeur d'echelle :");
    }
    switch($echelleRichter){
        case 1 :
            echo "$echelleRichter Microtremblement de terre, non ressenti.";
            break;
        case 2 :
            echo "$echelleRichter Tres mineur. non ressenti mais détecté.";
            break;
        case 3 :
            echo "$echelleRichter Mineur. Causant rarement des dommages.";
            break;
        case 4 :
            echo "$echelleRichter Leger. Secousses notables d'objets a l'intérieur des maisons.";
            break;
        case 5 :
            echo "$echelleRichter Modere. Legers dommages aux edifices bien construits.";
            break;
        case 6 :
            echo "$echelleRichter Fort. Destructeur dans les zones allant jusqu'a 180 kilomètres a la ronde si elles sont peuplées.";
            break;
        case 7 :
            echo "$echelleRichter Majeur. Dommages moderes a severes dans les zones plus vastes.";
            break;
        case 8 :
            echo "$echelleRichter Important. Dommages serieux dans des zones a des centaines de kilomètres a la ronde.";
            break;
        case 9 :
            echo "$echelleRichter Devastateur. Devaste des zones sur des milliers de kilomètres a la ronde.";
            break;
        default :
            echo "C'EST L'APPOCALYPSE!!!";
        }
?>