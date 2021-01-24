<?php
    function chargementClasse($classe){
        require("./entites/".$classe.".php");
    }
    spl_autoload_register("chargementClasse");
    

    $moelleux = new Dessert();

    $personnes = readline("Nombre de personnes : ");
    echo $moelleux->Preparation($personnes);


?>