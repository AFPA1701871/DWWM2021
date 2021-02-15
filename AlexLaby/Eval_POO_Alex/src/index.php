<?php

    //Pour pouvoir aller chercher les différents fichiers
    require('./Services/function.php');
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');

    //Initialisation objets
    $pseudo=readline("Entrez votre pseudo : ");
    $joueur=new Joueur($pseudo);
    $de= new De;

    //Début de la partie
    $joueur->lancerPartie($joueur,$de);

?>