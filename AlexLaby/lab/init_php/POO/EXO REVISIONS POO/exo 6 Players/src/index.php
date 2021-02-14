<?php

    //Pour pouvoir aller chercher les différents fichiers
    require('./Services/function.php');
        function chargerClasse($classe){
            require ('./Entities/'.$classe.'.class.php');
        }
        spl_autoload_register('chargerClasse');

    //Entrer pseudo
    $inputPseudo=readline("Entrez votre pseudo : ");
    //Création d'un objet player
    $player= new Player(100,20,0,$inputPseudo);
    $player->move($inputPseudo,$player);

?>