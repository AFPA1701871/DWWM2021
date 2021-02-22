<?php

    function chargementClasse($classe){
        require("./entites/".$classe.".php");
    }

    spl_autoload_register("chargementClasse");

    do{
        $limite = readline("Limite de vitesse : ");
    } while ($limite<=0);

    $radar = new Radar();
    $radar->setLimiteVitesse($limite);

    do{
        $nbVoitures = readline("Nombre de voitures : ");
    } while ($nbVoitures<2);

    for ($i=1;$i<=$nbVoitures;$i++){
        echo "Voiture n°$i :\n";
        $nomVoiture = "voiture" . $i; 
        $marque = readline("Marque de la voiture : ");
        $modele = readline("Modèle de la voiture : ");
        $immatriculation = readline("Numéros d'immatriculation de la voiture : ");
        $couleur = readline("Couleur de la voiture : ");
        $$nomVoiture = new Voiture($marque,$modele,$immatriculation,$couleur,$i);
        echo "\n";
    }

    $exces = false;
    $tour = 1;

    for ($i=1;$i<=$nbVoitures;$i++){
        $nomVoiture = "voiture" . $i;
        $$nomVoiture->demarrage();
    }

    do{

        echo "\nTour n°$tour :\n";

        for ($i=1;$i<=$nbVoitures;$i++){

            $nomVoiture = "voiture" . $i;
            echo "\n";
            echo "La " . $$nomVoiture->getNom() . " a accéléré de " . $$nomVoiture->acceleration() . " km/h et roule maintenant à " . $$nomVoiture->getVitesse() . "km/h.";
         
            if ($$nomVoiture->getVitesse() > $radar->getLimiteVitesse()){
                echo "\nExcès de vitesse !\n";
                $exces = true;
                $$nomVoiture->caracteristiquesVoiture();
                break;
            }

        }

    $tour++;
    echo "\n";

    } while (!$exces);

    if ($$nomVoiture->getVitesse() <= ($radar->getLimiteVitesse())+10){
        echo "Le conducteur de la " . $$nomVoiture->getNom() . " se verra retirer 1 point sur son permis et devra s'acquitter d'une amende de 45 euros.";
    }

    if ($$nomVoiture->getVitesse() > ($radar->getLimiteVitesse())+10 and $$nomVoiture->getVitesse() <= ($radar->getLimiteVitesse())+20){
        echo "Le conducteur de la " . $$nomVoiture->getNom() . " se verra retirer 3 point sur son permis et devra s'acquitter d'une amende de 90 euros.";
    }

    if ($$nomVoiture->getVitesse() > ($radar->getLimiteVitesse())+20){
        echo "Le conducteur de la " . $$nomVoiture->getNom() . " a rendez-vous à la gendarmerie.";
    }

?>