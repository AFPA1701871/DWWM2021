<?php
    //autoload des classes
    Function autoloadClasses($classe){
        require("./src/entities/".$classe.".class.php");
    }
    spl_autoload_register("autoloadClasses");

    //on va demander a l'utilisateur la limite de vitesse a ne pas depasser, que l'on va affecter a la vitesse minimum pour le flash
    do{
        $_limiteVitesse=readline("Veuillez saisir la limite de vitesse accepté avant verbalisation: ");
    }while($_limiteVitesse<30 or $_limiteVitesse>130);
    $newRadar= new Radar;
    $newRadar->set_vitesseMinPourFlash($_limiteVitesse);

    //initialiser le nombre de voiture presentes
    do{
        $nbVoiture=readline("Indiquez le nombre de voiture(s) particpant au programme: ");
    }while($nbVoiture<2);

    //creation de l'objet "Voiture"
    for($i=0;$i<$nbVoiture;$i++){
        $numVoiture=1+$i;
        $marque=readline("Indiquez la marque de la voiture n°$numVoiture: ");
        $modele=readline("Indiquez le modele de la voiture n°$numVoiture: ");
        $immatriculation=readline("Indiquez la plaque d'immatriculation de la voiture n°$numVoiture: ");
        $couleur=readline("Indiquez la couleur de la voiture n°$numVoiture: ");
        $newCar[$i]=new Voiture($marque,$modele,$immatriculation,$couleur);
    }
       

    //demarrage des voitures
    for($i=0;$i<$nbVoiture;$i++){
        $newCar[$i]->set_speed(0);
        $newCar[$i]->vitesseVoiture();
    }
   
    
    //effectuer une boucle qui va permettre de faire accelerer les voitures et flasher la premiere qui sera en infraction, affecter le ou les pv en fonction
    do{
        for($i=0;$i<$nbVoiture;$i++){
            $newCar[$i]->startvoiture(random_int(1,25));
            $newRadar->flash($newCar[$i]->get_speed());
            $voitureFlash=$newRadar->get_flashRadar();
        if($voitureFlash==true){
            echo"la voiture flashée est la ".$newCar[$i]->get_marque()." ".$newCar[$i]->get_modele()." de couleur "." ".$newCar[$i]->get_couleur()." qui est immatriculée "." ".$newCar[$i]->get_immatriculation()."\n";
            $amende= new Amende;
            $amende-> calculPv($_limiteVitesse,$newCar[$i]->get_speed());
            break;
        }
        }
    }while( $voitureFlash==false);
    ?>