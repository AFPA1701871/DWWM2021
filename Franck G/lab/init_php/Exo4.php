<?php
    $motUn=readline("Veuillez entrez un premier nom");
    $motDeux=readline("Veuillez entrez un second nom");
    $motTrois=readline("Veuillez entrez un troisième nom");
    if ($motUn<$motDeux && $motDeux<$motTrois){
        $reponse="Les noms sont dans l'ordre alphabétique" ;
    }
    else{
        $reponse="Les noms sont pas dans l'odre alphabétique" ;
    }
    echo $reponse;
?>