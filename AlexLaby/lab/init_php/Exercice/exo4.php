<?php
    $line=readline("Entrez un premier nom");
    $line2=readline("Entrez un second nom");
    $line3=readline("Entrez un troisième nom");
    if ($line<$line2 && $line2<$line3){
        $reponse="nom triés dans l'ordre alphabétique" ;
    }
    else{
        $reponse=" nom pas triés dans l'odre alphabétique" ;
    }
    echo $reponse;

?>