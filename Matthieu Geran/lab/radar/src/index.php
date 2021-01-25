<?php

    function chargementClasse($classe){
        require("./entites/".$classe.".php");
    }

    spl_autoload_register("chargementClasse");

    do{
        $vitesse = readline("Limite de vitesse : ");
    } while ($vitesse<=0);

    do{
        $nbVoitures = readline("Nombre de voitures : ");
    } while ($nbVoitures<2);

    //for ($i=1;$i<$nbVoitures;$i++){  
        $marque = readline("Marque de la voiture : ");
        $modele = readline("Modèle de la voiture : ");
        $immatriculation = readline("Numéros d'immatriculation de la voiture : ");
        $couleur = readline("Couleur de la voiture : ");
        $voiture = new Voiture($marque,$modele,$immatriculation,$couleur);
        echo $voiture->caracteristiquesVoiture();
    //}


?>