<?php


do{
    $intNombreVal = readline ("Saisir nombre de note : ");
}while(is_int($intNombreVal));

for ($intCompt=0; $intCompt <=$intNombreVal-1 ; $intCompt++) { 
    do{
        $tabVal[$intCompt]=readline("Saisir note ". ($intCompt+1) . " : ");
    }while(is_int($tabVal[$intCompt]));
    $intSomme+=$tabVal[$intCompt];
}
    $intComptNote=0;
    foreach ($tabVal as $intVal) { 
        if($intVal> ($intSomme/count($tabVal))){
            $intComptNote++;
        }
    }
    echo $intSomme/count($tabVal);
    echo "Premiere version"."\n";
    echo "\n"."Nombre de note superieure a la moyenne(".($intSomme/count($tabVal)).") : ".$intComptNote;

    $intSomme=array_sum($tabVal);
    $intComptNote=0;
    foreach ($tabVal as $intVal) { 
        if($intVal> ($intSomme/count($tabVal))){
            $intComptNote++;
        }
    }

    echo "Deuxieme version"."\n";
    echo "Nombre de note superieure a la moyenne(".($intSomme/count($tabVal)).") : ".$intComptNote;
?>