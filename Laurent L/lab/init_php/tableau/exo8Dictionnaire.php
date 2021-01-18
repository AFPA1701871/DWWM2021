<?php
    //Variables
    $dico = [];
    $nbElement = 0;
    $bool = false;
    $compteur = 0;

    //Saisie du dico
        //nombre de saisie dans le dico
    while ($nbElement <=0 or intdiv($nbElement,1) != $nbElement){
        $nbElement = readline("Nombre de mots à saisir dans le dictionnaire : ");
    }
    for($i=0;$i<$nbElement;$i++){
        $dico[$i] = readline("Votre mot : ");        
    }
   
    // tri du dictionnaire
    for($i=0;$i<count($dico)-1;$i++){
        $mini = $i;
        for($j = $i+1; $j<count($dico) ; $j++){
            if ($dico[$mini]>$dico[$j]){
                $mini = $j;
            }
        }
        if ($mini != $i){
            $temp = $dico[$mini];
            $dico[$mini]=$dico[$i];
            $dico[$i] = $temp;
        }
    }
   
    //Saisie du mot par l'utilisateur
    $saisie = readline("Votre recherche : ");

    //Recherche du mot dans le dico
    for($i = 0 ; $i < count($dico) ; $i++){
        if ($saisie == $dico[$i]){
            $bool = true;
            $compteur = $i+1;
        }
    }

    //Affichage résultat
    if($bool){
        echo "Le mot est présent en position : ".$compteur;
    } else{
        echo "Le mot n'est pas présent dans le dictionnaire";
    }

?>