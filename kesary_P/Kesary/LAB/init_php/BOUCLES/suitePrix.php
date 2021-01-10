<?php
$compteur = 0;
$somme = 0;
$payer = 0;
$rendu=0;
$billetDix=0;
$billetCinq=0;
echo"\n";
$prixAchat = readline("Entrez le prix de vos articles :");
$compteur++;
$somme = $somme + $prixAchat;
while ($prixAchat != 0) {
    $prixAchat = readline("Entrez le prix de vos articles :");
    $compteur++;
    $somme = $somme + $prixAchat;
}
echo "Vous nous devez " . $somme . "€";
$payer = readline("Entrez le montant à payer : \n");

while ($payer < $somme) {
    $payer = readline("Le prix à payer est : \n");
}

$rendu = $payer - $somme;

//On cherche le nombre de billet de dix
$billetDix = 0;
while ($rendu >=10) {
    $billetDix = $rendu/10;
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
echo "Billet de dix : \n". $billetDix;
echo "Billet de cinq : \n". $billetCinq;
echo "Pièce de 1 Euro : ". $rendu;

?>







