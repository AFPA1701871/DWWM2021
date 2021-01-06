<?php
    for($i=0; $i < 3; $i++){
        $nom = readline("Ecrivez 3 noms:");
        settype($nom,"string");
        readline_add_history($nom);
    }
    print_r(readline_list_history());
?>