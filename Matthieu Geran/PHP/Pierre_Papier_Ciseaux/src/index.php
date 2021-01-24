<?php

    require("service/fonctions.php");

    $nom = readline("Tapez votre nom : ");
    $prenom = readline("Tapez votre prénom : ");

    if (jeu()){
        $reponse = readline("Voulez-vous voir la liste des gagnants ? (oui/non) ");
        gagnants($nom,$prenom,$reponse);
    }

?>