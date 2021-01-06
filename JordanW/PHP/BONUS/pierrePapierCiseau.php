<?php

$tabChoix = array("PIERRE","FEUILLE","CISEAUX");
$tabChoixPerdant = array(2,3,1);

$intScoreMoi = 0;
$intScoreAdversaire = 0;

$intMancheTotal = 3;
$intManche =0;

$intChoixMoi = 0;
$intChoixAdversaire = 0;

while( $intManche < $intMancheTotal){
    //Saisi 1/2/3 pour pierre feuille ciseaux
    $intChoixMoi =0;
    while ($intChoixMoi <> 1 && $intChoixMoi <> 2 && $intChoixMoi <> 3){
        $intChoixMoi = readline("Saisir 1 pour PIERRE, 2 pour FEUILLE, 3 pour Ciseaux : ");
    }

    $intChoixAdversaire = random_int(1,3);
    Echo "Adversaire :".$tabChoix[$intChoixAdversaire] . "\n";
    Echo "Moi :".$tabChoix[$intChoixMoi] . "\n";

    //CONFRONTATION
    if ($intChoixMoi = $intChoixAdversaire){
        echo "EGALITE" . "\n";
    }else{}
        if($intChoixMoi = $tabChoixPerdant[$intChoixAdversaire]){
            echo "JE gagne (". $tabChoix[$intChoixMoi]." gagne contre ". $tabChoix[$intChoixAdversaire] ." )". "\n";
            $intScoreMoi ++;
        }else
             echo "JE PERD (". $tabChoix[$intChoixMoi]." perd contre ". $tabChoix[$intChoixAdversaire] ." )". "\n";
            $intScoreAdversaire ++;
        {
    $intManche++;
    }
}

if ($intScoreMoi > $intScoreAdversaire){
    echo "VOUS AVEZ GAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGNE" . "\n";
}else{
    echo "VOUS AVEZ PEEEEEEEEEEEEEEEEEEERDU" . "\n";
}

?>