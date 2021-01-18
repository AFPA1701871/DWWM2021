<?php
    require('src/services/fonctionConvertirTableEnTableauA2Dimension.php');
    require('src/services/fonctionTablage.php');
    require('src/services/fonctionMaxColonne.php');

    $lignes=tableEnTableau2Dims("personne");

    print_r($lignes);

    $nbDeChamps=4;

    $TailleMaximaleColonne=maxColonne($lignes,$nbDeChamps);
    for ($j=0; $j < 4; $j++) { 
        for ($i=0; $i < count($lignes); $i++) { 
            $valeurEncodees[$i][$j]=tablage($lignes[$i][$j],$TailleMaximaleColonne[$i]);
        }
    }

    print_r($valeurEncodees);
    
?>