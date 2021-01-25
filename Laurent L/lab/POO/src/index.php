<?php
    require("./entities/Personnage.php");

    $appartement1 = new Domicile();

    $appartement1->lancerVotreChauffage("15 dec 2020");

    $appartement1->aggrandissement(25);

    foreach($appartement1 as $key => $element){
        echo"\n";
        print"$key : $element";
    }


?>