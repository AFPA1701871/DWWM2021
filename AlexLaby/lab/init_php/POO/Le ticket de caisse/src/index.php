<?php
    //Pour pouvoir aller chercher mes autres fichiers
    require('./Entities/function.php');
    function chargerClasse($classe){
        require ('./Entities/'.$classe.'.class.php');
    }
    spl_autoload_register('chargerClasse');

    $nomClient=readline("Quel est le nom du client ? ");
    $prenomClient=readline("Quel est le prénom du client ? ");
    $listeProduit=array ("Pomme","Banane","Poire","Pêche");
    $quantitéProduit=readline("Quelle quantité souhaitez-vous ?")

?>