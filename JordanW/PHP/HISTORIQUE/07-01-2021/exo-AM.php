<?php

    echo "EXO 1 APRES-MIDI"."\n";
    do{
        $intVal= readline("Saisir valeur : ");
    }while(is_numeric($intVal)==false);

    for ($intCompt=$intVal+1; $intCompt<=$intVal+10 ; $intCompt++) { 
        echo $intCompt."\n";
    }


    echo "\n"."EXO 2 APRES-MIDI"."\n";
    do{
        $intVal= readline("Saisir valeur : ");
    }while(is_numeric($intVal)==false);

    for ($intCompt=1; $intCompt<=10 ; $intCompt++) { 
        echo $intVal." x ".$intCompt." = ". $intCompt*$intVal."\n";
    }

    echo "\n"."EXO 3 APRES-MIDI"."\n";
   do{
        $intVal= readline("Saisir valeur : ");
    }while(is_numeric($intVal)==false);

    $intSomme = 0;
    for ($intCompt=1; $intCompt<= $intVal ; $intCompt++) { 
        $intSomme += $intCompt;
        echo $intCompt."+";
    }
    echo " = ".$intSomme;

    echo "\n"."EXO 4 APRES-MIDI"."\n";
    do{
        $intVal= readline("Saisir valeur : ");
    }while(is_numeric($intVal)==false);
    $intSomme = 0;
    for ($intCompt=1; $intCompt<= $intVal ; $intCompt++) { 
        $intSomme *= $intCompt;
        echo "x".$intCompt."x";
    }
    echo " = ".$intSomme;
?>