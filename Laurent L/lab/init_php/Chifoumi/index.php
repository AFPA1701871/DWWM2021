<?php

    //Variables
    require('./service/fonctions.php');


    //affichage jeu
    echo "Jeu du Chifoumi : \n\n";

    // demande des nom et prénom du participant    
    $aSaisir = inscription();

    // bouclage du jeu pour eviter le desagrement de l'échec
    do{
        // demande du mouvement à l'utilisateur
        $choix = choixMouvement();

        // resultat du jeu
        $gagne = resultat($choix);

        //insertion dans le fichier winner
        if($gagne){
            insertionFichier($aSaisir);
            $affichage = choixAffichage();
            if ($affichage = "oui"){
                apercuTableau();
            }
        }
        $rejouer = repetitionJeu();

    }while(strtolower($rejouer=="oui"));
    








?>