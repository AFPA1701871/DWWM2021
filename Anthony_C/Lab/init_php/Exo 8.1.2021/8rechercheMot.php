<?php
    $tableau=array("oiseau","perdu","ailes","crash","mort");
    
    $mot=readline("Ecrivez un mot que vous voulez rechercher dans le dico : ");
    strtolower($mot);

    //Avec fonction
    $key = array_search($mot,$tableau);
    if (false !== $key){
        echo "Le mot est dans le dico.";
    }
    else{
        echo "Le mot n'est pas dans le dico.";
    }
?>