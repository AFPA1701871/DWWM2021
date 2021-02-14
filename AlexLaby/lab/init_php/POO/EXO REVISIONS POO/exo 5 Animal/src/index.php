<?php

    //Pour pouvoir aller chercher les différents fichiers
    require('./Services/function.php');
    require('./Interface/interface.php');
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');

    $lapin= new Lapin("lapin","blanc",4,true);
    $paul=new Chasseur("Paul","fusil");

    echo "Le lapin ".$lapin->getCouleur()." à ".$lapin->getNombrePatte(). " pattes a été crée. \n";
    echo "Le chasseur ".$paul->getNom()." a été crée avec son ".$paul->getArme().".\n\n";

    $lapin->seNourrir();

    while($lapin->getEnVie()==true){
        $paul->seDeplacer();
        $lapin->crier();
        readline("");
        $paul->chasser($lapin);
        $lapin->fuir($lapin);
        readline("");
    }
?>