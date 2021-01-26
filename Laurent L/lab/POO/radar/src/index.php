<?php
    //variables
    require ("../service/fonction.php");  //liaison avec fichier fonction
    spl_autoload_register("chargerClasse");  //liaison avec toutes les classes
    $infraction = false;

    //Limitation
    do {
        $limitation = intval(readline ("fixer la limite de vitesse : "));
    }while ($limitation<50 || $limitation>130);

    $radar = new Radar($limitation);
    

    //Nombre de voiture particitante
    do{
        $nbreVoitures = intval(readline("Nombre de voitures participantes : "));
    }while ($nbreVoitures<2);
    

    //Création des voitures
    for($i=1 ;$i<=$nbreVoitures; $i++){
        echo "Renseignement du véhicule ".$i."\n";
        $marque = readline("La marque du véhicule : ");
        $modele = readline("Le modele du véhicule : ");
        $immat = readline("L'immatriculation du véhicule : ");
        $couleur = readline("La couleur du véhicule : ");
        $voiture = "voiture$i";
        $$voiture = new Voiture($marque, $modele, $immat, $couleur);
        
    }

    //démarrage voiture initialisation vitesse à 0
    for ($i = 1; $i<=$nbreVoitures; $i++){
        $voiture = "voiture$i";
        $$voiture->demarrage();
    }

    //acceleration de chaque voiture
    while($infraction==false){
        for($i=1;$i<=$nbreVoitures;$i++){
            $voiture = "voiture$i";
            $$voiture->acceleration();
            echo $$voiture->affichageAccelVitesse();
            if ($$voiture->get_vitesse()>$limitation){
                $infraction = true;
                $voitureFlashee = $$voiture;
            }
        }
    }
        
    

    // echo "\nLa marque de votre voiture est : $voiture1->get_marque()";






?>