<?php

    function chargerClasse($classe){
        require ('./entities/'.$classe.'.class.php');
    }

    //permet de poser une question tout en permettant de sortir du programme à la saisie de quit
    function readQuit($question){
        $saisie = readline("$question");
        if (strtoupper($saisie)=="QUIT"){
            exit;
        }else{
            return $saisie;
        }
    }


?>