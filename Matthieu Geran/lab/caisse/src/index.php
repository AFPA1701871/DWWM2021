<?php

    function chargementClasse($classe){
        require("./entites/".$classe.".php");
    }

    spl_autoload_register("chargementClasse");
    require("service/fonctions.php");

    $nom = readline("Tapez votre nom : ");
    $prénom = readline("Tapez votre prénom : ");

    $articles = chargement();

    liste($articles);

    achat($articles);

    ticket($articles);



?>