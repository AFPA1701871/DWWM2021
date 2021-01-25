<?php
    require('./functions.php');
    require('./Voiture.class.php');

    // On demande à l'utilisation les infos
    $limitation=readline("Indiquez la limitation de vitesse :\n");
    
    do{ //Demander le nombre de voitures à controler jusqu'à ce qu'il soit supérieur ou égale à 2
        $nbrVoiture=readline("Indiquez le nombre de voitures participantes (Minimum 2) :\n");
    }while($nbrVoiture<2);

    //On demande les infos pour chaqu'une des voitures
    for ($i=1;$i<=$nbrVoiture;$i++){
    echo "\n\nIndiquez les informations de la voiture " .$i ."\n";
    $marque=readline("La marque :\n");
    $modele=readline("Le modèle :\n");
    $couleur=readline("La couleur :\n");
    $plaque=readline("La plaque d'immatriculation :\n");
    $voiture="voiture".$i;
    $$voiture = new Voiture ($marque ,$modele ,$couleur, $plaque);

    echo $voiture ->get_marqueVoiture();
    }

    /*for ($i=1;$i<=$nbrVoiture;$i++){
        $_marqueVoiture=readline("Quelle est la marque de la voiture $i :\n");
        $_modeleVoiture=readline("Quel est le modèle de la voiture $i :\n");
        $_couleurVoiture=readline("Quelle est la couleur de la voiture $i :\n");
        $_immatriculationVoiture=readline("Quelle est la plaque de la voiture $i :\n");
    }*/

?>