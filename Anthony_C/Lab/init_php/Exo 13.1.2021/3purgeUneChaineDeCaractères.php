<?php
    //Initialisation des valeurs puis appelle de la fonction.
    require("3function.php");
    $valeur= "Hello World";
    $purge= "lo";
    //On nomme la valeur retourner puis on l'affiche avec la function "echo".
    $purgedValeur=purgeChaineCaracters($valeur,$purge);
    echo "Première valeur sans fonction Native :\n$purgedValeur\n";

    /*Avec function native.
    Initialisation des valeurs*/
    $valeur2= "Hello World";
    $purge2= "ld";
    //str_split les caractères a purger dans un tableau.
    $tabPurge2=str_split($purge2);
    /*Sur ce principe str_replace boucle sur les caractères à purger du "tabPurge2" 
    puis check si l'un des caractères est dans la $valeur2 si oui il l'a remplace "" puis l'affiche avec la function "echo".*/
    $purgedValeur2=str_replace($tabPurge2, "", $valeur2);
    echo "Deuxième valeur avec fonction Native :\n$purgedValeur2";
?>