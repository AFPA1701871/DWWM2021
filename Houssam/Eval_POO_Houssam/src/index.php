<?php

require "../entities/Des.php";
require "../entities/Joueur.php";

$partie = new Des($value);
$partie->jetDeDes($value);

function parties(){
    $allscore = 0;
    $scoreHero = 50;
    $scoreMonstre = 0;
    $TRUE = true;
        do{
            echo ("Le Héro commence !\n");
            sleep (1);
            $scoreHero = jetDeDes($value);
            echo ("Le Héro à fait \"$scoreHero\"\n");
            echo (" \n");
            echo (" C'est le tour du Monstre\n");
            sleep (1);
            $scoreMonstre = jetDeDes($value);
            echo ("Votre score est de \"$scoreHero\"\n");
            $And = ValuesTest ($scoreMonstre, $scoreHero);
            $allscore = $allscore + $scoreHero;
            if ($And == -1){ $TRUE = true;}
            if ($And == 0){ $TRUE = false;}
            if ($And == 1){ $TRUE = true;}
        }while ($TRUE);
}

function ValuesTest ($scoreMonstre, $scoreHero){
    $return;
    if($scoreMonstre > $scoreHero){
        echo ("Tu as perdu ! ");
        $return = 0;
    }
     
    if($scoreHero > $scoreMonstre){
        echo ("Tu as gagné ! ");
        $return = 1;
    }
     
    else {
        echo ("Égalitée !");
        $return = -1;
    }
    return $return;
}

ValuesTest ($scoreMonstre, $scoreHero);
parties($scoreMonstre, $scoreHero)

?>