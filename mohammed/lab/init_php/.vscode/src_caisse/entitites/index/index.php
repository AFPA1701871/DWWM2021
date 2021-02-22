<?php 
require (".\classes.php");
$nom = readline ( " entrer nom client  :");
$produit = readline ( " entre les produit  :");
$prix = readline ( " entrer prix des produit ");
$facture = new facture ($nom,$produit,$prix);
echo $facture->get_produit()."\n";
echo $facture->get_prix()."\n";
echo $facture->get_nom()."\n";
?>