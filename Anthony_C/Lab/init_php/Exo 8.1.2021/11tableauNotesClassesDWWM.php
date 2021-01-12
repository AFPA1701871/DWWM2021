<?php
    $tabNotes[0]=array("clé","valeur");
    $tabNotes[1]=array("Franck",14);
    $tabNotes[2]=array("Kesary",16);
    $tabNotes[3]=array("Jimmy",15);
    afficherTab($tabNotes);
    
    
    
    function afficherTab(array $tab){
        foreach ($tab as $l) {
            foreach ($l as $c){
                echo $c." ";
            }
            echo "\n";
        }
        }
?>