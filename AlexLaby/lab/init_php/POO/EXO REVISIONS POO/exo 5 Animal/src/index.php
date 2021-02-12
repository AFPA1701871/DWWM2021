<?php

    //Pour pouvoir aller chercher les différents fichiers
    require('./Services/function.php');
    require('./Interface/interface.php');
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');

    $lapinBlanc= new Lapin("blanc",4,true);
    $paul=new Chasseur("Paul","fusil");

    echo "Le lapin ".$lapinBlanc->getCouleur()." à ".$lapinBlanc->getNombrePatte(). " a été crée. \n";
    echo "Le chasseur ".$paul->getNom()." a été crée avec son ".$paul->getArme().".\n";

?>