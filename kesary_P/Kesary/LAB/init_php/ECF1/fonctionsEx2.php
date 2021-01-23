<?php
//Fonctions vérification des données entrées par l'utilisateur
function verif($saisie){
    while($saisie <= 0){
        $saisie = readline("Impossible, veuillez entrez un nombre positif ou différent de 0 : ");
    }
}

//Table de multiplication
function tableMultiplication($saisie){
    for ($i=1; $i <= 10; $i++) { 
        echo $saisie."     x".$i."      = ".$saisie * $i."\n";
    }
}


?>