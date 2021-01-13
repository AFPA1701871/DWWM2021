<?php

    $motPresent=false;
    $dico= array("abeille","banane","manger","pomme","tracteur");

    $inputUser=readline("Entrez le mot à verifier.");
    for ($i=0;$i<count($dico);$i++){
        if ($inputUser==$dico[$i]){
            $motPresent=true;
        }
    }

    if ($motPresent==true){
        echo "Mot présent dans le dictionnaire";
    }else{
        echo "Le mot ou le chiffre n'est pas présent dans le dictionnaire";
    }


?>