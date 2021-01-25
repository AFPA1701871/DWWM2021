<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("./src/Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    // demande à l'utilisateur de fixer une limitation de vitesse et l'affecte à la vitesse minimum de flash du radar
    do {
        $speedLimit=readline("entrez la limite de vitesse!: ");
    } while ($speedLimit<30 or $speedLimit>130);
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
        $tableCars[$i]= new Car($brand,$model,$registration,$color);
    }

    // boucle pour faire démarrer les voitures
    for ($i=0; $i < $nbCar ; $i++) { 
        $tableCars[$i]->set_Speed(0);
        $tableCars[$i]->start();
    }

    // boucle pour faire accelérer les voitures, flasher la première qui dépassera la limitation de vitesse et créer un PV en fonction
    do {
        for ($i=0; $i < $nbCar ; $i++) { 
            $tableCars[$i]->increaseSpeed(random_int(1,25));

            $radar->readSpeed( $tableCars[$i]->get_Speed() );
            $radarFlashedACar=$radar->get_RadarFlashedACar();
            if ($radarFlashedACar==true) {
                echo "la voiture flashée est la ".$tableCars[$i]->get_Brand()." ".$tableCars[$i]->get_Model()." de couleur ".$tableCars[$i]->get_Color()." immatriculée ".$tableCars[$i]->get_Registration().".\n";

                $fine= new Fine;
                $fine->calculateFine( $speedLimit, $tableCars[$i]->get_Speed() );
                break;
            }
        }
    } while ($radarFlashedACar==false);
    
?>