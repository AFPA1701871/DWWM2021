<?php

$tabChoix = array("PIERRE","FEUILLE","CISEAUX");
$tabChoixPerdant = array(1,2,0);

$intScoreMoi = 0;
$intScoreAdversaire = 0;

$intMancheTotal = 3;
$intManche =0;

$intChoixMoi = 0;
$intChoixAdversaire = 0;

while( $intManche < $intMancheTotal){
    //Saisi 1/2/3 pour pierre feuille ciseaux
    $intChoixMoi =3;
    while ($intChoixMoi <> 0 && $intChoixMoi <> 1 && $intChoixMoi <> 2){
        $intChoixMoi = readline("Saisir 0 pour PIERRE, 1 pour FEUILLE, 2 pour Ciseaux : ");
    }

    $intChoixAdversaire = random_int(0,2);
    Echo "Adversaire :".$tabChoix[$intChoixAdversaire] . "\n";
    Echo "Moi :".$tabChoix[$intChoixMoi] . "\n";

    //CONFRONTATION
    if ($intChoixMoi == $intChoixAdversaire){
        echo "EGALITE" . "\n";
    }else{
        if($intChoixMoi == $tabChoixPerdant[$intChoixAdversaire]){
            echo "JE gagne (". $tabChoix[$intChoixMoi]." gagne contre ". $tabChoix[$intChoixAdversaire] ." )". "\n";
            $intScoreMoi ++;
        }else{
             echo "JE PERD (". $tabChoix[$intChoixMoi]." perd contre ". $tabChoix[$intChoixAdversaire] ." )". "\n";
            $intScoreAdversaire ++;
        }
    $intManche++;
    }
}

if ($intScoreMoi > $intScoreAdversaire){
    echo "VOUS AVEZ GAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGNE" . "\n";
}else{
    echo "VOUS AVEZ PEEEEEEEEEEEEEEEEEEERDU" . "\n";
}

?>