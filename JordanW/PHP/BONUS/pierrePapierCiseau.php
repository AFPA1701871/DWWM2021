<?php

$tabChoix = ["PIERRE","FEUILLE","CISEAUX"];
$tabChoixPerdant = [2,3,1];

$intScoreMoi = 0;
$intScoreAdversaire = 0;

$intMancheTotal = 3;
$intManche =0;

$intChoixMoi = 0;
$intChoixAdversaire = 0;

while( intManche < intMancheTotal){
    //Saisi 1/2/3 pour pierre feuille ciseaux
    REQUETE "Saisir 1 pour PIERRE, 2 pour FEUILLE, 3 pour Ciseaux : ",intChoixMoi;
    while ($intChoixMoi <> 1 && $intChoixMoi <> 2 && $intChoixMoi <> 3){
        REQUETE "Saisir 1 pour PIERRE, 2 pour FEUILLE, 3 pour Ciseaux : ",intChoixMoi;
    }

    $intChoixAdversaire = random_int(1,3);
    Echo "Adversaire :".$tabChoix[intChoixAdversaire];
    echo "Moi :".$tabChoix[intChoixMoi];

    //CONFRONTATION
    if ($intChoixMoi = $intChoixAdversaire){
        echo "EGALITE";
    }else{}
        if($intChoixMoi = $tabChoixPerdant[$intChoixAdversaire]){
            echo "JE gagne (". $tabChoix[intChoixMoi]." gagne contre ". $tabChoix[intChoixAdversaire] +" )"
            intScoreMoi = intScoreMoi +1
        }else
             echo "JE PERD (". $tabChoix[intChoixMoi]." perd contre ". $tabChoix[intChoixAdversaire] +" )"
            $intScoreAdversaire = $intScoreAdversaire +1;
        {
        $intManche=$intManche+1;
    }
}

if ($intScoreMoi > $intScoreAdversaire){
    echo "VOUS AVEZ GAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGNE";
{else{
    echo "VOUS AVEZ PEEEEEEEEEEEEEEEEEEERDU"; 
}

?>