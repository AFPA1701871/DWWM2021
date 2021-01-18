<?php
// $fp = fopen('config.ini', 'r');
// if (!$fp) {
//     echo 'Impossible d\'ouvrir le fichier somefile.txt';
// }
// while (false !== ($char = fget($fp))) {
//     echo "$char\n";
// }

$commande = "CREATE TABLE monTest(nom,prenom,ville,manille,Martinique)";
$tabCommande = explode(" ",$commande);
// echo $commande;
// foreach($tabCommande as $element){
//     echo "\n".$element;
// }

if ($tabCommande[0]=="CREATE"){
    $instruction =$tabCommande[0].$tabCommande[1];
    $fichier = $tabCommande[2];
    if ((strpos($fichier,"(") && strpos($fichier,")") && strpos($fichier,","))){
        $tabFichier = explode("(",$fichier);
        $nomFichier = $tabFichier[0];
        $enteteFichier = $tabFichier[1];
        $enteteFichier = str_replace(",",";",$enteteFichier);
        $enteteFichier = str_replace(")",";",$enteteFichier);
    } else{
        echo "Il y une erreur de syntaxe.";
    }
    
}
echo $instruction;
echo "\n".$nomFichier;
echo "\n".$enteteFichier;








?>