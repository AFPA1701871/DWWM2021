<?php

    $factorielleN=1;
    $factorielleP=1;
    $factorielleNP=1;

    $nbPartants = readline("Nombre de chevaux partants : ");
    $nbJoues = readline("Nombre de chevaux joués : ");

    for ($i = 1;$i<=$nbPartants;$i++){
        $factorielleN = $factorielleN * $i;
    }

    for ($i = 1;$i<=$nbJoues;$i++){
        $factorielleP = $factorielleP * $i;
    }

    for ($i = 1;$i<=($nbPartants-$nbJoues);$i++){
        $factorielleNP = $factorielleNP * $i;
    }

    $formuleX = $factorielleN / $factorielleNP;
    $formuleY = $factorielleN / ($factorielleP * $factorielleNP);
    
    echo "Dans l'ordre, une chance sur " . $formuleX . " de gagner.\n";
    echo "Dans le désordre, une chance sur " . $formuleY . " de gagner.";
    
?>