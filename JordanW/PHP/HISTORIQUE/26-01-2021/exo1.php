<?php 

    function chargementClass($classe){
        require('./class/'. $classe .'.class.php');
    }
    spl_autoload_register('chargementClass');

    $monLivretA = new LivretA("def456");
    $monLivreuJeune = new LivretJeune("livJeune1");

    // methode surchargé
    echo $monLivretA->taux()."\n";
    echo $monLivreuJeune->taux()."\n";
    
    $monLivretA->parler();
    // methode class mere
    echo "Le numéro du livret A est ". $monLivretA->getNumero(). "\n";
    
?> 