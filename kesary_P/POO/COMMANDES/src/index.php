<?php

//require("./fonctions/fonctions.php");
function chargementClasse($class){
    require('./entities/'.$class.'.php');
}
spl_autoload_register('chargementClasse');

//$tabLigneCommande=[];
$client1 = new Client("Skywlaker","Luke","007");
echo "Informations client : \n";
echo "Nom : ". $client1->get_nom()." \n";
echo "Prénom : ".$client1->get_prenom(). " \n";
echo "Numéro Client : ". $client1->get_numeroClient(). "\n";

echo "\n";


$produit1 = new Produit("001","Mangue bio","MGBio",1.99);
$produit2 = new Produit("002","Pomme Jazz","PJazz",3.90);
$produit3 = new Produit("003","Poire Packam bio","PPBio",0.85);
$produit4 = new Produit("004","Orange Sanguinelli Cat 1","OSCat1",2.50);
$produit5 = new Produit("005","Bananes Cavendish Cat 1","BCCat1",1.19);
$produit6 = new Produit("006","Ananas sweet","ASWee",1.89);
$produit7 = new Produit("007","Kiwi Vert Bio","KKiBio",3.69);
$produit8 = new produit("008","Pomme Juliet Bio Cat 2","PPJBio",0.85);
$produit9 = new Produit("009","Poire Conférence Cat 1","PPCCat1",2.59);
$produit10 = new Produit("010","Raisin Mixte sans pépin","RRMSP",3.69);

$listeProduit = [$produit1,$produit2,$produit3,$produit4,$produit5,$produit6,$produit7,$produit8,$produit9,$produit10];

//Afficher la liste des produits
foreach ($listeProduit as $produits) {
    echo " \n";
    $produits->afficherSesInfos();
}

?>