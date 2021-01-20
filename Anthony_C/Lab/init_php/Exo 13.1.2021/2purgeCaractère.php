<?php
    //Initialisation des valeurs puis appelle de la fonction.
    require("2function.php");
    $valeur= "Hello World";
    $purge= "o";
    //On nomme la valeur retourner puis on l'affiche avec la function "echo".
    $purgedValeur=purge($valeur,$purge);
    echo "Première valeur sans fonction Native :\n$purgedValeur\n";

    /*Avec function native.
    Initialisation des valeurs*/
    $valeur2= "Hello World";
    $purge2= "l";
    //Sur ce principe str_replace permet de purger le caractère "Purge2" qui ce trouve dans la valeur $valeur2 en "" puis l'affiche avec la function "echo".
    $purgedValeur2=str_replace($purge2, "", $valeur2);
    echo "Deuxième valeur avec fonction Native :\n$purgedValeur2";
?>