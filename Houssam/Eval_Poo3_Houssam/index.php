<?php
    //Les commentaires les commentaires
    function chargerClasse($classe){
        require "./Entities"."/".$classe . '.class.php';
    }
    spl_autoload_register('chargerClasse');

    echo "\nCréation du client\n";

    //Création objets
    //$compte1 = new Compte("50236R","120€");
    //$livret1 = new Livret("45789L","1200€");
    $client = new Client("Dupont","Paul","50236R","45789L");
    $client->afficher();

    // Cava pas !


?>