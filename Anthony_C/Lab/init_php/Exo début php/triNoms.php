<?php
    $nom1 = readline("Ecrivez un nom");
    $nom2 = readline("Ecrivez un deuxième nom");
    $nom3 = readline("Ecrivez un troisième nom");
    if ($nom1<$nom2 and $nom2<$nom3){
        echo "La suite des noms est trié.";
    }
    else{
        echo "La suite des noms n'est pas trié.";
    }   
?>