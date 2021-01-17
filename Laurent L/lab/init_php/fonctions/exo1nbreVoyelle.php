<?php
    require('fonctions.php');

    //Demande de la saisie à l'utilisateur
    $saisie = readline("Saisir votre phrase : ");

    //affichage du nombre de voyelle
    echo "Votre phrase contient ".nbreVoyelle($saisie)." voyelles.";


?>