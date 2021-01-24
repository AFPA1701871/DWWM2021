<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("./src/Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    // demande à l'utilisateur de fixer une limitation de vitesse et l'affecte à la vitesse minimum de flash du radar
    do {
        $speedLimit=readline("entrez la limite de vitesse!: ");
    } while ($speedLimit<50 or $speedLimit>130);
    $radar= new Radar;
    $radar->set_speedMinForFlash($speedLimit);

    // demande à l'utilisateur de définir le nombre de voitures participantes
    do {
        $nbCar=readline("entrez le nombre de voitures participantes: ");
    } while ($nbCar<2);
    
    // crée un nombre d'objet "car" égal au nombre de voitures et les stock dans un tableau de 0 à $nbCar-1
    for ($i=0; $i < $nbCar; $i++) { 
        $j=1+$i;
        $brand=readline("entrez la marque de la voiture n°$j: ");
        $model=readline("entrez le modèle de la voiture n°$j: ");
        $registration=readline("entrez l'immatriculation de la voiture n°$j: ");
        $color=readline("entrez la couleur de la voiture n°$j: ");
        $tableCars[$i]= new Car;
        $tableCars[$i]->setBrand($brand);
        $tableCars[$i]->setModel($model);
        $tableCars[$i]->setRegistration($registration);
        $tableCars[$i]->setColor($color);
    }

    //à supprimer, affiche le contenu de $tableCars
    print_r($tableCars);

    // boucle pour faire démarrer les voiture
    for ($i=0; $i < $nbCar ; $i++) { 
        $tableCars[$i]->setSpeed(10);
        $tableCars[$i]->start();
    }

    for ($i=0; $i < $nbCar ; $i++) { 
        $tableCars[$i]->increaseSpeed(random_int(1,25));
        $tableCars[$i]->giveSpeed();
        // c'est ici qu'il faut faire le passage au radar
    }
?>