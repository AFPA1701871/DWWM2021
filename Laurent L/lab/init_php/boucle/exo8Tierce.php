<?php

    $nFacto = 1;
    $pFacto = 1;
    $npFacto = 1;

    $n = readline("Nombre de chevaux partants :");
    $p = readline("Nombre de chevaux joués : ");

    //bouclage pour déerminer les différents numerateurs et dénominateurs
    for($i=1; $i<=$n ; $i++){
        $nFacto = $nFacto * $i;
        if ($i <= $p) {
            $pFacto = $pFacto * $i;
            if ($i<=($n-$p)){
                $npFacto = $npFacto * $i;
            }
        }    
    };

    //Calcul des possibilités selon tirage ordonné (x) et non ordonné (y)
    $x = $nFacto/$npFacto;
    $y = $nFacto/($pFacto*$npFacto);

    //affichage des resultats
    echo "Probabilité de réussite :\n";
    echo "Dans l'ordre, une chance sur ".$x." de gagner.\n";
    echo "Dans le désordre, une chance sur ".$y." de gagner.";

?>