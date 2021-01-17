<?php
$compteur = 0;
$somme = 0;
$payer = 0;
$rendu=0;
$billetDix=0;
$billetCinq=0;
echo"\n";
$prixAchat = readline("Entrez le prix de vos articles :");
//Vérification de la saisie utilisateur
    while (! is_numeric($prixAchat)) {
        echo "Recommencez \n";
        $prixAchat = readline("Entrez un nombre :");
    }
//Si l'utilisateur entre 0 à la première saisie, un message s'affiche
    if ($prixAchat == 0) {
        echo "Il faut au moins un prix \n";
        echo "Recommencez :\n";
        $prixAchat = readline("Entrez le prix de vos articles :");
    }
$compteur++;
$somme = $somme + $prixAchat;

    while ($prixAchat != 0) {
        $prixAchat = readline("Entrez le prix de vos articles :");
        $compteur++;
        $somme = $somme + $prixAchat;
    }
echo "Vous nous devez " . $somme . "€ \n";
$payer = readline("Entrez le montant à payer : \n");

    while ($payer < $somme) {
        $payer = readline("Le prix à payer est : \n");
    }

$rendu = $payer - $somme;

//On cherche le nombre de billet de dix
    while ($rendu >=10) {
        $billetDix = intdiv($rendu,10);
        
        $rendu = $rendu-($billetDix*10);
    }
//Ici on cherche le nombre de billet de cinq et pièce de 1 €
    if ($rendu >= 5) {
        $billetCinq = 1;
        $rendu = $rendu - 5;
    }else {
        $billetCinq = 0;
    }

echo "Je vous rends : \n";
echo "Billet de dix : ". $billetDix."\n";
echo "Billet de cinq : ". $billetCinq."\n";
echo "Pièce de 1 Euro : ". $rendu;

?>







