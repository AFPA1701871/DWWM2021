<?php
    echo "EXO 7 APRES-MIDI TIERCE"."\n";

    $intChevaux = readline("Saisir nombre de chevaux :");
    $intChevauxJoue = readline("Saisir nombre de chevaux joué :");

    while($intChevauxJoue > $intChevaux){
        $intChevauxJoue = readline("Saisir nombre de chevaux joué (inférieur ou égal au nombre de chevaux :");
    }
    
    $intChanceOrdre = 1;
    $intChanceDesordre = 1;
    
    for($intCompt = 1; $intCompt <= $intChevauxJoue;$intCompt++){
        $intChanceOrdre *= ($intCompt+$intChevaux-$intChevauxJoue);
        $intChanceDesordre *= $intCompt;
    }
    
    echo "Dans l'ordre : une chance sur ".$intChanceOrdre." de gagner"."\n";
    echo "Dans le désordre : une chance sur ".$intChanceDesordre," de gagner";

?>