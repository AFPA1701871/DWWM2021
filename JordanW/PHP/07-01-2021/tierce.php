<?php
    echo "EXO 7 APRES-MIDI TIERCE"."\n";

    do{
        $intChevaux = readline("Saisir nombre de chevaux :");
    }while(is_numeric($intChevaux)==false);

    do{
        $intChevauxJoue = readline("Saisir nombre de chevaux joué :");
    }while(is_numeric($intChevauxJoue)==false OR $intChevauxJoue>$intChevaux);
    
    $intChanceOrdre = 1;
    $intChanceDesordre = 1;
    
    for($intCompt = 1; $intCompt <= $intChevauxJoue;$intCompt++){
        $intChanceOrdre *= ($intCompt+$intChevaux-$intChevauxJoue);
        $intChanceDesordre *= $intCompt;
    }
    
    echo "Dans l'ordre : une chance sur ".$intChanceOrdre." de gagner"."\n";
    echo "Dans le désordre : une chance sur ".$intChanceDesordre," de gagner";

?>