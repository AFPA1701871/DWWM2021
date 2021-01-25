<?php
    $nbPartants=readline("entrez le nombre de chevaux partants: ");
    $nbJoues=readline("entrez le nombre de chevaux joués: ");

    $factorielleNbPartants=1;
    for ($i=1; $i < $nbPartants+1 ; $i++) { 
        $factorielleNbPartants=$factorielleNbPartants*$i;
    }

    $factorielleNbPartantsMoinsNbJoues=1;
    $NbPartantsMoinsNbJoues=$nbPartants-$nbJoues;
    for ($i=1; $i < $NbPartantsMoinsNbJoues+1 ; $i++) { 
        $factorielleNbPartantsMoinsNbJoues=$factorielleNbPartantsMoinsNbJoues*$i;
    }

    $factorielleNbJoues=1;
    for ($i=1; $i < $nbJoues+1; $i++) { 
        $factorielleNbJoues=$factorielleNbJoues*$i;
    }

    $chancesDansLordre=$factorielleNbPartants/$factorielleNbPartantsMoinsNbJoues;
    $chancesDansLeDesordre=$factorielleNbPartants/($factorielleNbJoues*$factorielleNbPartantsMoinsNbJoues);

    echo "vous avez une chance sur ".$chancesDansLordre." de gagner dans l'ordre\n";
    echo "vous avez une chance sur ".$chancesDansLeDesordre." de gagner dans le desordre";
?>