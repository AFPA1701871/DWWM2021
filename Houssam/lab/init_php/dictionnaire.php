<?php

$dictio=["mot1","mot2","mot3","mot4","mot5"];
$mot =readline("Écrivez le mot à vérifier : ");

    for ($i=0;$i<=4;$i++){
        if ($mot=$dictio[$i]){
            echo "Mot trouvé";
        }
            else{
            echo "Mot non trouvé";
        }
    }
?>