<?php

function choixDuClient($tabClient){
    $choixDuCompte = readline("Quel compte voulez-vous consulter : 1-LDD ou 2-Livret : ");
    for ($i=0; $i <count($tabClient) ; $i++) { 
        echo "\tn° ".$i." : ".$tabClient[$i]->get_identifiant(). " \n";
    }
}


?>