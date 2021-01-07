<?php
    $nom1=readline("entrez un nom: ");
    $nom2=readline("entrez un deuxieme nom: ");
    $nom3=readline("entrez un troisieme nom: ");

    (($nom1<$nom2 and $nom2<$nom3)? $reponse="c'est classé": $reponse="ce n'est pas classé");

    echo "$reponse"
    ?>