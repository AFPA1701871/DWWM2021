<?php
    do {
        $partant=readline("Veillez enregistrer le nombre de chevaux partant.");
        $nbChevaux=readline("Sur combien de chevaux allez vous pariez ?");
        if ($partant < $nbChevaux) {
            echo "Veillez enregistrer des nombres correcte s'il vous plait!"."\n";
        }
    } while ($partant < $nbChevaux);
    $pMoinsNb=$partant-$nbChevaux;
    $factoP=1;
    $factoNb=1;
    $factoPmoinsNb=1;
    for ($i=1; $i <= $partant ; $i++) { 
        if ($i <=$nbChevaux) {
            $factoNb=$factoNb*$i;
        }
        if ($i <=$partant){
            $factoP=$factoP*$i;
        }
        if ($i <=$pMoinsNb){
            $factoPmoinsNb=$factoPmoinsNb*$i;
        }
    }
    $ordre=$factoP/$factoPmoinsNb;
    $desordre=$factoP/($factoNb*$factoPmoinsNb);
    echo "Vous avez 1 chance sur $ordre de l'avoir dans l'ordre."."\n";
    echo "vous avez 1 chance sur $desordre de l'avoir dans le désordre.";
?>