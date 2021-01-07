<?php
    $article=readline("Entrer le prix de votre article :");
        while ($article <= 0) {
            $article=readline("Entrer le vrai prix de votre article :");
        } 
        $rendre= 0;
        $prix=$article;
        while ($article != 0) {
            $article=readline("Entrer le prix de votre prochain article, faite 0 si vous en avez plus.");
            while ($article <0) {
                $article=readline("Entrer le vrai prix de votre prochain article sinon tapez 0 pour arrêter.");
            }
            $prix = $prix+$article;
        } 
        echo "La somme de vos articles est : $prix €"."\n";
        $paye=readline("Entrer le montant que vous allez payer.");
        while ($paye < $prix) {
            $rendre=$prix-$paye;
            echo "Le montant n'est pas exacte veillez recommencer, il manque $rendre €."."\n";
            $paye=readline("Entrer le bon montant cette fois çi s'il vous plait."."\n");
        }
        $rendre=$paye-$prix;
        echo "Je dois vous rendre $rendre €"."\n";
        $billet10= intdiv($rendre , 10);
        $reste=$rendre%10;
        $billet5= intdiv($reste , 5);
        $reste=$rendre%5;
        $euro=$reste;
        echo "Voici votre monnaie $billet10 billet(s) de 10euros, $billet5 billet(s) de 5 euros et, $euro pièce(s) de 1 euro.";
    ?>