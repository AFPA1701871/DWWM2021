<?php
function rechercheLine(){
   
    $fichier = fopen("../BDD/config.ini","a");
    $ligne = 0;
    //$temp = 0;

    while ($ligne <2){
        $temp = fgets($fichier,4096);
        $ligne++;
    }
    echo $temp;
    fclose($fichier); 
}



?>