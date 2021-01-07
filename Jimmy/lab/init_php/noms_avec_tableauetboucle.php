<?php
    for ($numero=0;$numero<3;$numero++){
        $noms = readline("Ecrire les noms : ");
        $tabfinal[$numero] = $noms;
    }
    if(($tabfinal[0]<$tabfinal[1]) && ($tabfinal[1]<$tabfinal[2])){
        echo "Les mots sont dans l'ordre alphabetique";
    }else{
        echo "Les mots ne sont pas dans l'ordre alphabetique";
    }
  ?>