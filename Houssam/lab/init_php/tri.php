<?php
    $nom1 =readline("Écrivez le 1er nom :");
    $nom2 =readline("Écrivez le 2eme nom :");
    $nom3 =readline("Écrivez le 3eme nom :");
    if (($nom1<$nom2) and ($nom2<$nom3)){
        echo "Ces noms sont bien rangés";
    }   else  {
        echo "Ces noms ne sont pas rangés";
    }
?>