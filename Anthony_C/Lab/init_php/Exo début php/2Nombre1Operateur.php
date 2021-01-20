<?php
    for($i=0;$i<2;$i++){
        $nb=readline("Ecrivez deux nombres :");
        $tab[$i]=$nb;
    } 
    $operator=readline("Quelle operateur voulez vous utiliser ? (+-*/) :");
    switch($operator){
        case "+" :
            $tab[0]=$tab[0]+$tab[1];
            echo "Le résultat est :".$tab[0];
            break;
        case "-" :
            $tab[0]=$tab[0]-$tab[1];
            echo "Le résultat est :".$tab[0];
            break;
        case "*" :
            $tab[0]=$tab[0]*$tab[1];
            echo "Le résultat est :".$tab[0];
            break; 
        case "/" :
            $tab[0]=$tab[0]/$tab[1];
            echo "Le résultat est :".$tab[0];
            break;
        default :
            echo "Erreur saisie.";
    }  
?>