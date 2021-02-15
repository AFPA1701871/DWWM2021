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
    
    //Nombre de voitures particitantes
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
            $stock1 = $$voiture->get_vitesse();
            $stock2 = $radar->get_limitation();
            if ($stock1 >$stock2){
                echo $radar->affichageVoitureFlashee($$voiture,$stock1);
                echo $radar->sanction($stock1);
                $infraction = true;
                break; 
            }

        }
    }
        
    

    // echo "\nLa marque de votre voiture est : $voiture1->get_marque()";






?>