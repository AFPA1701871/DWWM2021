<?php

    require("./service/fonction.php");

    $nom=readline("veuillez saisir votre nom : ");
    $prenom=readline("veuillez saisir votre prénom : ");
    $joueur=$nom." ".$prenom;
    $ordi="ordi";
    echo "0 = PIERRE \n";
    echo "1 = FEUILLE \n";
    echo "2 = CISEAUX \n";

    do{
        $choixUt=readline("saisir votre choix (0/1/2) : ");
    }while($choixUt!=0 and $choixUt!=1 and $choixUt!=2);

    //le jeu
    $resultUt=choixUt($choixUt);
    $resultBot=choixBot();
    resultat($joueur,$ordi,$resultUt,$resultBot);

    //affichage des gagnants
    $rep=readline("voulez vous voir la liste des gagnants ? ");
    
    if($rep=="O" or $rep=="oui"){
        liste();
    }

?>