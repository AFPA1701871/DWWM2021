<?php
    $nom1=readline("Saisissez un nom ");
    $nom2=readline("Saisissez un deuxième nom ");
    $nom3=readline("Saisissez un troisième nom ");

    if ($nom1<$nom2 and $nom2<$nom3)
    {
        echo "Les noms sont dans l'ordre alphabétique";
    }
    else
    {
        echo "Les noms ne sont pas dans l'ordre";
    }    
?>